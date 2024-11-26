<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

use function PHPSTORM_META\type;

class ChallengeController extends Controller
{
    


    public function index(Request $request)
    {




        
       
        return view('frontend.game.index');
    }



    public function view($lang,$level,$type)
    {

if($type=="Bug Hunter")

       
        return view('frontend.game.bug_hunter',compact('lang','type','level'));

       
        else
        return view('frontend.game.time_challenge',compact('lang','type','level'));




    }


    
    public function generateChallenge(Request $request)
    {




        $difficulty = $request->input('difficulty', 'easy'); // Difficulty level
        $language = $request->input('language', 'Python'); // Programming language

        $prompt = "Generate a $difficulty coding challenge in $language. Include the problem description, example inputs, and outputs.";

        try {
          
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                            ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                            ['role' => 'user', 'content' =>  $prompt],
                        ],
                'max_tokens' => 200,
                'temperature' => 0.7,
            ]);

            $challenge = $response['choices'][0]['message']['content'] ?? 'Unable to generate a challenge.';
            return response()->json(['challenge' => $challenge]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }




    }
    
    
    public function executeCode(Request $request)
    {
       


        $language = $request->input('language', 'Python'); // Programming language
        $userCode = $request->input('code');
        $challenge = $request->input('challenge');

        $prompt = "You are a coding assistant. Evaluate the following solution for the problem provided:\n\nProblem:\n$challenge\n\n User Code ($language):\n$userCode\n\nExplain if the solution is correct or provide any errors.";

        try {
           
            $response = OpenAI::chat()->create([
                'model' => 'gpt-4',
              'messages' => [
                    ['role' => 'system', 'content' => "You are a programming judge. Evaluate the following code for correctness."],
                    ['role' => 'user', 'content' =>  $prompt ],   ],
        
                'max_tokens' => 300,
                'temperature' => 0.7,
            ]);

           

            $evaluation = $response['choices'][0]['message']['content'] ?? "Evaluation failed.";

            if (str_contains(strtolower($evaluation), 'correct')) {
                return response()->json(['output' => 'Good job!']);
            } else {
                return response()->json(['output' => "I'm sorry, that's incorrect.", 'feedback' => $evaluation]);
            }


        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    








    }








    public function generate_bug_hunter_challenge(Request $request)
    {
        
        $difficulty = $request->input('difficulty', 'easy'); // Difficulty level
        $language = $request->input('language', 'Python'); // Programming language
    
        // Adjust prompt based on type
        $prompt ="Generate a $difficulty Bug Hunter coding challenge in $language. Provide:
                1. **Problem Description**: explaining what the function is supposed to do.
                2.**Buggy Code Snippet**: A code snippet containing syntax errors.";

        try {
            $response = OpenAI::chat()->create([
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful assistant that creates coding challenges.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'max_tokens' => 300,
                'temperature' => 0.7,
            ]);
    
            $challenge = $response['choices'][0]['message']['content'] ?? 'Unable to generate a challenge.';
            return response()->json(['challenge' => $challenge]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

    
    public function executeCode_bug_hunter(Request $request)
{
    $language = $request->input('language', 'Python'); 
    $userCode = $request->input('code');
    $challenge = $request->input('challenge');

    // Prompt to enforce brief feedback
    $prompt = "You are a concise coding assistant. Review the following buggy code for the given problem. 
    If the code is correct (free of logical, syntax, or spelling errors), respond with 'Correct' followed by a brief statement about its correctness. 
    If there are issues, provide a very short summary of the errors. Do not include unnecessary details.

    Problem:\n$challenge\n\nUser Code ($language):\n$userCode";

    try {
        $response = OpenAI::chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => "You are a programming judge. Provide concise feedback on the code provided."],
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 150, // Limit tokens to enforce brevity
            'temperature' => 0.7,
        ]);

        $evaluation = $response['choices'][0]['message']['content'] ?? "Evaluation failed.";

        // Check if the evaluation starts with "Correct"
        if (str_starts_with(trim($evaluation), 'Correct')) {
            return response()->json(['output' => 'Good job!', 'feedback' => $evaluation]);
        } else {
            return response()->json(['output' => "I'm sorry, that's incorrect.", 'feedback' => $evaluation]);
        }

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    














}


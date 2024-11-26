<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;



class ChallengeController2 extends Controller
{
    


    public function index(Request $request)
    {




        
       
        return view('frontend.game.index');
    }



    public function view($lange,$type,$level)
    {
       
        return view('frontend.game.view');
    }
    // public function generateChallenge(Request $request)
    // {
    //     $type = $request->input('type', 'standard'); // 'standard' or 'bug_hunter'
    //     $difficulty = $request->input('difficulty', 'easy'); // Difficulty level
    //     $language = $request->input('language', 'Python'); // Programming language
    
    //     // Adjust prompt based on type
    //     $prompt = $type === 'bug_hunter'
    //         ? "Generate a $difficulty Bug Hunter coding challenge in $language. Provide:
    //             1. A problem description explaining what the function is supposed to do.
    //             2. A buggy code snippet that contains logical, syntax, or other common programming errors.
    //             3. Examples of input and output for what the function should produce."
    //         : "Generate a $difficulty coding challenge in $language. Include:
    //             1. A problem description explaining what the function is supposed to do.
    //             2. Examples of input and output.";
    
    //     try {
    //         $response = OpenAI::chat()->create([
    //             'model' => 'gpt-4',
    //             'messages' => [
    //                 ['role' => 'system', 'content' => 'You are a helpful assistant that creates coding challenges.'],
    //                 ['role' => 'user', 'content' => $prompt],
    //             ],
    //             'max_tokens' => 300,
    //             'temperature' => 0.7,
    //         ]);
    
    //         $challenge = $response['choices'][0]['message']['content'] ?? 'Unable to generate a challenge.';
    //         return response()->json(['challenge' => $challenge]);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }
    

    
    
    // public function executeCode(Request $request)
    // {
    //     $type = $request->input('type', 'standard'); // 'standard' or 'bug_hunter'
    //     $language = $request->input('language', 'Python'); // Programming language
    //     $userCode = $request->input('code');
    //     $challenge = $request->input('challenge');
    
    //     // Adjust prompt based on type
    //     $prompt = $type === 'bug_hunter'
    //         ? "You are a coding assistant. Review the following buggy code for the given problem and provide feedback on the errors and suggestions for fixing them.\n\nProblem:\n$challenge\n\nUser Code ($language):\n$userCode"
    //         : "You are a coding assistant. Evaluate the following solution for the problem provided:\n\nProblem:\n$challenge\n\nUser Code ($language):\n$userCode\n\nExplain if the solution is correct or provide any errors.";
    
    //     try {
    //         $response = OpenAI::chat()->create([
    //             'model' => 'gpt-4',
    //             'messages' => [
    //                 ['role' => 'system', 'content' => "You are a programming judge. Evaluate the code based on the problem and provide feedback."],
    //                 ['role' => 'user', 'content' => $prompt],
    //             ],
    //             'max_tokens' => 300,
    //             'temperature' => 0.7,
    //         ]);
    
    //         $evaluation = $response['choices'][0]['message']['content'] ?? "Evaluation failed.";
    
    //         if (str_contains(strtolower($evaluation), 'correct') || str_contains(strtolower($evaluation), 'well done')) {
    //             return response()->json(['output' => 'Good job!', 'feedback' => $evaluation]);
    //         } else {
    //             return response()->json(['output' => "I'm sorry, that's incorrect.", 'feedback' => $evaluation]);
    //         }
    
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }
    


    
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

        $prompt = "You are a coding assistant. Evaluate the following solution for the problem provided:\n\nProblem:\n$challenge\n\nUser Code ($language):\n$userCode\n\nExplain if the solution is correct or provide any errors.";

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















}


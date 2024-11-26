@extends('frontend.layouts.app')

@section('content')
    <style>
        #section_featured .slick-slider .slick-list{
            background: #fff;
        }
        #section_featured .slick-slider .slick-list .slick-slide {
            margin-bottom: -5px;
        }
        @media (max-width: 575px){
            #section_featured .slick-slider .slick-list .slick-slide {
                margin-bottom: -4px;
            }
        }
    </style>

    @php $lang = get_system_language()->code;  @endphp

    <!-- Sliders -->
    
  @include('frontend.home.partials.home-banner-area')
   


  <style>
    .game_filter {
      padding: 30px 0;
      width: 100%;
    }
  
    .card_shadow {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
  
    .nav-tabs {
      margin-bottom: 20px;
    }
  
    .nav-tabs .nav-item .nav-link {
      font-family: "Inter", sans-serif;
      font-weight: 500;
      font-size: 18px;
      line-height: 24px;
      color: #1d2026;
    }
  
    .nav-tabs .nav-link.active {
      border-bottom: 2px solid var(--blue);
    }
  
    .cards_game {
      background: #e9efff;
      cursor: pointer;
      width: 100%;
      max-width: 400px;
      padding: 20px;
      border-radius: 30px;
      transition: transform 0.5s, background 0.5s;
      text-align: center;
    }
  
    .cards_game:hover {
      background: var(--main-color);
      color: var(--white-Color);
      transform: scale(1.05);
    }
  
    .cards_game img {
      width: 100%;
      height: auto;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
  
    .game_heading h4 {
      margin: 10px 0;
      font-family: "Inter", sans-serif;
      font-weight: 600;
      font-size: 18px;
      line-height: 22px;
      color: #1d2026;
    }
  
    .btn-primary {
      background: var(--main-color);
      border: none;
      border-radius: 5px;
      font-size: 16px;
      padding: 10px 20px;
      transition: background 0.3s;
    }
  
    .btn-primary:hover,
    .btn-primary:active {
      background: var(--green-color);
    }
  </style>

  
  <section class="game_filter">
    <div class="container-xxl">
      <div class="row">
        <div class="col-lg-12 p-lg-0 mb-3">
          <div class="card_shadow shadow_sec_padd">
            <div class="row">
              <!-- Game Card 1 -->
              <div class="col-md-6">
                <div class="cards_game" onclick="openGameModal('Bug Hunter')">
                  <img src="https://i.pinimg.com/564x/7e/0b/a6/7e0ba6e3703ffafc9f34d1efc8af2a95.jpg" alt="Bug Hunter Image" class="img-fluid w-100 mb-2">
                  <div class="game_heading">
                    <h4>Bug Hunter</h4>
                  </div>
                  <button type="button" class="btn btn-primary mt-2">Start Game</button>
                </div>
              </div>
  
              <!-- Game Card 2 -->
              <div class="col-md-6">
                <div class="cards_game" onclick="openGameModal('Time Challenge')">
                  <img src="https://i.pinimg.com/564x/70/3b/83/703b83d13160aa9904093328e8a6639c.jpg" alt="Time Challenge Image" class="img-fluid w-100 mb-2">
                  <div class="game_heading">
                    <h4>Time Challenge</h4>
                  </div>
                  <button type="button" class="btn btn-primary mt-2">Start Game</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Modal for selecting the game and language/level -->
      <div class="modal fade" id="gameModal" tabindex="-1" aria-labelledby="gameModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="gameModalLabel">Choose Language and Level</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <!-- Language Selection -->
                <div class="mb-3">
                  <label for="languageSelect" class="form-label">Language:</label>
                  <select id="languageSelect" class="form-select">
                    <option value="python">Python</option>
                    <option value="javaScript">JavaScript</option>
                    <option value="java">Java</option>
                    <!-- Add more languages as needed -->
                  </select>
                </div>
  
                <!-- Level Selection -->
                <div class="mb-3">
                  <label for="levelSelect" class="form-label">Level:</label>
                  <select id="levelSelect" class="form-select">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                  </select>
                </div>
  
                <!-- Start Game Button -->
                <div class="d-grid">
                  <button type="button" onclick="startGame()" class="btn btn-primary">Start Game</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <script>
    let selectedGame = ''; // Store selected game name
  
    // Open the modal for selecting game and language/level
    function openGameModal(gameName) {
      selectedGame = gameName; // Save the selected game
      let modal = new bootstrap.Modal(document.getElementById("gameModal"));
      modal.show();
    }
  
    // Start the game and redirect to the appropriate page
    function startGame() {
      let language = document.getElementById("languageSelect").value;
      let level = document.getElementById("levelSelect").value;
  
      // Based on the selected game, redirect to the appropriate page
      let gameUrl = 'challenge/view';
  
      // Redirect to the game page with selected language and level as parameters
      window.location.href = `${gameUrl}/${language}/${level}/${selectedGame}`;
    }
  
    // Optional: Remove modal backdrop if necessar
    document.getElementById('gameModal').addEventListener('hidden.bs.modal', function () {
      document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
    });
  </script>
      


   


@endsection


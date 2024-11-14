<?php include 'header.php'; ?>

<section class="banner_slider">
  <div class="container-xxl p-lg-0 ">
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption d-md-block">
              <h2 class="mb-3">Learn from the Best</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption d-md-block">
              <h2 class="mb-3">Learn from the Best</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption d-md-block">
              <h2 class="mb-3">Learn from the Best</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="game_filter">
  <div class="container-xxl">
    <div class="row">
      <div class="col-lg-12 p-lg-0 mb-3">
        <div class="card_shadow shadow_sec_padd">
          <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
            <div class="row">
              <div class="col-6">
                <div class="cards_game" onclick="openGameModal('Bug Hunter')">
                  <img src="https://i.pinimg.com/564x/7e/0b/a6/7e0ba6e3703ffafc9f34d1efc8af2a95.jpg" alt="c2" class="img-fluid w-100 mb-2">
                  <div class="game_heading">
                    <h4>Bug Hunter</h4>
                  </div>
                  <a href="javascript:void(0);" class="btn btn-primary mt-2">Start Game..</a>
                </div>
              </div>
              <div class="col-6">
                <div class="cards_game" onclick="openGameModal('Time Challenge')">
                  <img src="https://i.pinimg.com/564x/70/3b/83/703b83d13160aa9904093328e8a6639c.jpg" alt="c3" class="img-fluid w-100 mb-2">
                  <div class="game_heading">
                    <h4>Time Challenge</h4>
                  </div>
                  <a href="javascript:void(0);" class="btn btn-primary mt-2">Start Game..</a>
                </div>
              </div>
            </div>
          </ul>
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
            <div class="mb-3">
              <label for="languageSelect" class="form-label">Language:</label>
              <select id="languageSelect" class="form-select">
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="levelSelect" class="form-label">Level:</label>
              <select id="levelSelect" class="form-select">
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
              </select>
            </div>
            <div class="d-grid">
              <button type="button" onclick="startGame()" class="btn btn-primary">Start Game</button>
            </div>
          </form>
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
    let gameUrl = '';

    if (selectedGame === 'Bug Hunter') {
      gameUrl = 'find_errors.php'; // Change this to the correct page for Bug Hunter
    } else if (selectedGame === 'Time Challenge') {
      gameUrl = 'code_completion.php'; // Change this to the correct page for Time Challenge
    }

    // Redirect to the game page with selected language and level as parameters
    window.location.href = `${gameUrl}?language=${language}&level=${level}`;
  }

  document.getElementById('gameModal').addEventListener('hidden.bs.modal', function () {
    document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
  });
</script>

<?php include 'footer.php'; ?>

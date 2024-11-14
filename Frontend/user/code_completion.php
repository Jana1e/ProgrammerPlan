<?php include 'header.php'; ?>

<div class="container mt-5">
  <h2 class="text-center">لعبة إكمال الكود</h2>
  <form id="code-completion-form">
    <label for="incomplete-code">الكود الناقص:</label>
    <pre><code id="incomplete-code">
// JavaScript example with missing code
function greet() {
  console.log("Hello, ");
}
    </code></pre>
    <label for="completion">أكمل الكود:</label>
    <input type="text" id="completion" class="form-control" placeholder="أدخل الكود الناقص هنا">
    <button type="button" class="btn btn-success mt-3" onclick="checkCompletion()">تحقق من الإجابة</button>
    <p id="completion-feedback" class="mt-3"></p>
  </form>
</div>

<script src="js/code_completion.js"></script>

<?php include 'footer.php'; ?>

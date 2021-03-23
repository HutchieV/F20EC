<nav>
  <div class="nav-cont page-sizings">
    <div class="nav-title">
      <a href="index.php">F20EC Test Store</a>
    </div>

    <div class="nav-opts">
      <?php
        if(isset($_SESSION["username"]))
        {
          echo "<a href=\"index\">Signed in as ".$_SESSION["username"]."</a>";
        }
      ?>
    </div>
  </div>
</nav>

<div class="nav-spacer"></div>

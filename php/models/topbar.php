<?php
echo '<div class="fixed"> 
<nav data-options="is_hover: false" class="top-bar" data-topbar>
  <!-- Title -->
  <ul class="title-area">
    <li class="name"><h1><a href="#">'.$websiteName.'</a></h1></li>

    <!-- Mobile Menu Toggle -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <!-- Top Bar Section -->
  <section class="top-bar-section">

    <!-- Top Bar Left Nav Elements -->
    <ul class="left">

      <!-- Search | has-form wrapper -->
      <li class="has-form">
        <div class="row collapse">
          <div class="large-8 small-9 columns">
            <input type="text" placeholder="Find Stuff">
          </div>
          <div class="large-4 small-3 columns">
            <a href="#" class="alert button expand">Search</a>
          </div>
        </div>
      </li>
      <li class="has-form">
        <a class="button">Test</a>
      </li>
    </ul>

    <!-- Top Bar Right Nav Elements -->
    <ul class="right">
      <!-- Divider -->
      <li class="divider"></li>

      <!-- Dropdown -->
      <li class="has-dropdown"><a href="#">Item 1</a>
        <ul class="dropdown">
          <li><label>Level One</label></li>
          <li><a href="#">Sub-item 1</a></li>
          <li><a href="#">Sub-item 2</a></li>
          <li class="divider"></li>
          <li><a href="#">Sub-item 3</a></li>
          <li class="has-dropdown"><a href="#">Sub-item 4</a>

            <!-- Nested Dropdown -->
            <ul class="dropdown">
              <li><label>Level Two</label></li>
              <li><a href="#">Sub-item 2</a></li>
              <li><a href="#">Sub-item 3</a></li>
              <li><a href="#">Sub-item 4</a></li>
            </ul>
          </li>
          <li><a href="#">Sub-item 5</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <!-- Anchor -->
      <li><a href="#">Generic Button</a></li>
    </ul>
  </section>
</nav>
 </div>';
?>
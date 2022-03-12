<!-- BUttons -->
<div class="mt-10">
  <div class="uk-child-width-expand@l" uk-grid>
    <!-- One -->
    <div>
      <a href="./application.php" class="stat-box"
        ><div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'pending') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'pending') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'pending') {echo 'text-white ';} else {echo 'text-black';}; ?> font-semibold"
          >
            PENDING
          </div>

          <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
        </div></a
      >
    </div>
    <!-- Two -->
    <div>
      <a href="./approved.php" class="stat-box">
        <div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'approved') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'approved') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'approved') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
          >
            APPROVED
          </div>

          <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
        </div></a
      >
    </div>
    <!-- Three -->

    <div>
      <a href="./declined.php" class="stat-box">
        <div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'declined') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'declined') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'declined') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
          >
            DECLINED
          </div>

          <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
        </div></a
      >
    </div>
    <!-- Four -->
    <div>
      <a href="./graduates.php" class="stat-box"> </a>
    </div>
  </div>
</div>

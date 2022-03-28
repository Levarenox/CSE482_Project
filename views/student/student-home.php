<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../../assets/styles/student/student.css">
  <title>Student Dashboard</title>
</head>

<body>

  <!-- check that the 'data' key exists -->
  <?php if (isset($_SESSION['student_reg_array'])) { ?>
    <?php $student_reg = $_SESSION['student_reg_array']; ?>

    <div class="container">

      <!-- Navbar -->
      <header class="container__nav">

        <nav class="nav">

          <a href="home.html" class="nav__branding">Student Dashboard</a>

          <ul class="nav__menu">
            <li class="nav__item">
              <button class="nav__btn-logout" onclick="window.location.href='../logout/logout.php'">Logout</button>
            </li>
          </ul>

          <div class="nav__hamburger">
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
          </div>

        </nav>

      </header>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <div class="container__sidebar">

        <div class="sidebar">

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentProfile()">
              <span class="sidebar__icon"><i class="bi bi-person-circle"></i></span>
              <span>Profile</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentApply()">
              <span class=" sidebar__icon"><i class="bi bi-app-indicator"></i></span>
              <span>Apply</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentStatus()">
              <span class="sidebar__icon"><i class="bi bi-clock-history"></i></span>
              <span>Status</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentApproval()">
              <span class="sidebar__icon"><i class="bi bi-clipboard-check"></i></span>
              <span>Approval</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn-archive" onclick="studentArchive()">
              <span class="sidebar__icon"><i class="bi bi-columns-gap"></i></span>
              <span>Archive</span>
            </button>
          </div>

        </div>

      </div>
      <!-- /Sidebar -->

      <!-- Main -->
      <main class="container__main">

        <div class="main-profile">

          <div class="main-profile__table">
            <table>
              <tr>
                <th>Student ID</th>
                <td><?php echo $student_reg['student_id'] ?></td>
              </tr>
              <tr>
                <th>Name</th>
                <td><?php echo $student_reg['first_name'] . " " . $student_reg['last_name'] ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $student_reg['email'] ?></td>
              </tr>
              <tr>
                <th>Phone</th>
                <td><?php echo $student_reg['phone'] ?></td>
              </tr>
              <tr>
                <th>Date of Birth</th>
                <td><?php echo $student_reg['dob'] ?></td>
              </tr>
              <tr>
                <th>Country</th>
                <td><?php echo $student_reg['country'] ?></td>
              </tr>
              <tr>
                <th>Address</th>
                <td><?php echo $student_reg['address'] ?></td>
              </tr>
              <tr>
                <th>University</th>
                <td><?php echo $student_reg['university_name'] ?></td>
              </tr>
            </table>
          </div>

          <div class="main-profile__update">
            <button class="profile-update-btn">Update Profile Information</button>
          </div>

        </div>

        <div class="main-apply" style="display: none;">
          <div class="main-apply__search">
            <div class="search">
              <span class="search__icon"><i class="bi bi-search"></i></span>
              <input class="search__box" type="text" name="">
            </div>
          </div>

          <div class="main-apply__content">
            <div class="job-short">

              <div class="job-short__left">

                <div class="job-short__title">
                  <span>Game Artist (2D)</span>
                </div>

                <div class="job-short__company">
                  <span><i class="fa-solid fa-building"></i></span>
                  <span>NapTech Games</span>
                </div>

                <div class="job-short__city">
                  <span><i class="fa-solid fa-map-location"></i></span>
                  <span>Dhaka</span>
                </div>

                <div class="job-short__country">
                  <span><i class="fa-solid fa-earth-asia"></i></span>
                  <span>Bangladesh</span>
                </div>

              </div>

              <button class="job-short__right">+</button>

            </div>
            <div class="job">

              <div class="job__group">
                <span class="job__card-text">
                  <span>Position</span>
                  <span>:</span>
                </span>
                <span class="job__card-data">Graphic Designer (2D Artist)</span>
              </div>

              <div class="job__group">
                <span class="job__card-text">
                  <span>Responsibilities</span>
                  <span>:</span>
                </span>
                <span class="job__card-data">• Create character concepts art,
                  Illustration, environments, and backgrounds.
                  • Props Common trees, bushes crates, barrels.
                  • Characters Player Character Variants, Villager NPCs, Common
                  Enemies.
                  • Create a game icon, interface, and menus.
                  • Create assets from scratch in Adobe Photoshop, Illustrator,
                  or Inkscape.
                  • Create artwork for game logos, symbols, objects, and other
                  theme art.
                  • Communicate with the rest of our development team.
                  • Basic Knowledge of color theory, UX/UI, concept sketching,
                  and storyboarding.</span>
              </div>

              <div class="job__group">
                <span class="job__card-text">
                  <span>Required Skills</span>
                  <span>:</span>
                </span>
                <span class="job__card-data">Proficient in Adobe Illustrator and
                  Adobe Photoshop or other equivalent
                  software.</span>
              </div>

              <div class="job__group">
                <span class="job__card-text">
                  <span>Payment</span>
                  <span>:</span>
                </span>
                <span class="job__card-data">Unpaid</span>
              </div>

              <div class="job__group">
                <span class="job__card-text">
                  <span>Benefits</span>
                  <span>:</span>
                </span>
                <span class="job__card-data">Will be given an intern working
                  certificate.</span>
              </div>

              <button class="job__apply">Apply</button>

            </div>
          </div>
        </div>

        <div class="main-status" style="display: none;">
          Status
        </div>

        <div class="main-approval" style="display: none;">
          Approval
        </div>

        <div class="main-archive" style="display: none;">
          Archive
        </div>

      </main>
      <!-- /Main -->

      <!-- Footer -->
      <footer class="container__footer">
        <div class="footer">
          <span>©Team Aurora</span>
        </div>
      </footer>
      <!-- /Footer -->
      <script src="../../assets/js/hamburger.js"></script>
      <script src="../../assets/js/student-sidebar.js"></script>
    </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>
<div class="header container-fluid pe-4 ps-4">
    <!-- Title Section -->
    <div class="title col col-lg-6 col-md-2 col-sm-1 col-2 mr-xl-0 p-0">
        <div class="d-flex" style="gap: .5rem;">
            <button class="toggler-btn" type="button">
                <i class="bi bi-list"></i>
            </button>
            <h1 class="mb-0 fs-xl-3 d-none d-lg-block" style="font-weight: 900; color: #193c71;">WELCOME!</h1>
        </div>

        <p class="mb-0 d-none ps-2 d-xl-block" id="dateTime">
            <?php
            // Set the default timezone
            date_default_timezone_set('Asia/Manila');

            // Get the current date, day, and time
            $currentDate = date('m/d/Y'); // m/d/Y format
            $currentDay = date('l');
            $currentTime = date('h:i:s A'); // 12-hour format with AM/PM

            // Print the date, day, and time in the desired format
            echo "<script>
                        document.getElementById('dateTime').innerHTML = '$currentDate | $currentDay, $currentTime';
                    </script>";
            ?>
        </p>
    </div>

    <!-- Dropdown Section -->
    <div class="dropdown col col-lg-6 col-md-2 col-sm-1 col-2 d-flex p-0 justify-content-end">
        <!-- Notification Dropdown -->
        <div class="dropdown me-2">
            <button class="btn" type="button" id="notificationButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell-fill fs-5"></i>
            </button>
            <ul class="dropdown-menu notification-dropdown custom-dropdown-center mt-2" aria-labelledby="notificationButton">
                <li><a class="dropdown-item" href="#">Notification 1</a></li>
                <li><a class="dropdown-item" href="#">Notification 2</a></li>
                <li><a class="dropdown-item" href="#">Notification 3</a></li>
                <li><a class="dropdown-item" href="#">Notification 4</a></li>
                <li><a class="dropdown-item" href="#">Notification 5</a></li>
                <li><a class="dropdown-item" href="#">Notification 6</a></li>
                <li><a class="dropdown-item" href="#">Notification 7</a></li>
                <li><a class="dropdown-item" href="#">Notification 8</a></li>
                <li><a class="dropdown-item" href="#">Notification 9</a></li>
                <li><a class="dropdown-item" href="#">Notification 10</a></li>
                <li><a class="dropdown-item" href="#">Notification 11</a></li>
                <li><a class="dropdown-item" href="#">Notification 12</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">See all notifications</a></li>
            </ul>
        </div>

        <!-- Settings Dropdown -->
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-gear-fill fs-5"></i>
            </button>

            <ul class="dropdown-menu dropdown-menu-end mt-2 pt-2" aria-labelledby="dropdownMenuButton">
                <li>
                    <a class="dropdown-item p-2 text-center" href="/Thesis -v1/vendor/Admin/Profile/profile.php">
                        <i class="bi bi-person-fill" style="font-size: 1.4rem;"></i>
                        <span class="ms-2">Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item p-2 text-center" href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 1.2rem;"></i>
                        <span class="">Logout</span>
                    </a>
                </li>
            </ul>

            <!-- Log Out Confirmation Modal -->
            <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"  style="background-color: #193c71; color: white;">
                            <h5 class="modal-title" id="logoutModalLabel">Log Out Confirmation</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to log out?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <!-- Redirect to logout logic when confirmed -->
                            <a href="?logout=true" class="btn" style="background-color: #193c71; color: white;">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
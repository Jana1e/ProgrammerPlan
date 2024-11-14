<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 header-nav">
            <div class="admin-notification-form">
                <h4>Send New Notification</h4>
                <input type="text" id="notification-title" placeholder="Notification Title">
                <textarea id="notification-message" placeholder="Notification Message"></textarea>
                <button onclick="addNotification()">Send</button>
            </div>
            <hr>

            <ul class="notifications">
                <li>
                    <h4>All Notifications</h4>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <div>
                        <h4>hi</h4>
                        <p>this first notification</p>
                    </div>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <div id="admin-notifications"></div>
            </ul>
        </div>
    </div>
</div>

<script>
    function addNotification() {
        const title = document.getElementById('notification-title').value;
        const message = document.getElementById('notification-message').value;

        if (title && message) {
            const notificationHTML = `
                <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>${title}</h4>
                        <p>${message}</p>
                        <p>Just now</p>
                    </div>
                </li>
                <li><hr class="dropdown-divider"></li>
            `;

            document.getElementById('admin-notifications').insertAdjacentHTML('afterbegin', notificationHTML);
            document.getElementById('notification-title').value = '';
            document.getElementById('notification-message').value = '';
        } else {
            alert('Please fill in all fields!');
        }
    }
</script>


<?php include 'footer.php'; ?>

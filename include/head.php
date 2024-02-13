
        <nav class="narbar">
            <a>Production</a>
            <div class = 'log-out'>
            <form method="post">
                <button id="logoutButton" type="submit" name="logout">Log out</button>
            </form>
            </div>
        </nav>
        <div class="sidebar">
            <a href="display_table.php">Table</a>
            <a href="add_table.php">Add</a>
            <a href="user_display.php">User</a>
         </div>
    </body>
    <script>
        document.getElementById('logoutButton').addEventListener('click', function() {
            window.location.href = 'index.php';
        });
    </script>
    <!-- head -->
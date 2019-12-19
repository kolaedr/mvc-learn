<div class=" col-10 offset-lg-1">
    <?php
    $user = '';
    $userInfo = '';

    foreach ($list as $items) {
        if ($items->id != 10) {
            $user .= "<p class='' id='$items->id'>$items->name</p>";
            $userInfo .= "<div class='user-info hidden' data-id='$items->id'>
                    <table class=''>
            <tr>
                <td>Name:</td>
                <td>$items->name</td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>$items->username</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>" . $items->address->street . ", " . $items->address->city . "</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>$items->email</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>$items->phone</td>
            </tr>
            <tr>
                <td>Website:</td>
                <td><a href='http://$items->website' target='_blank'>$items->website</a></td>
            </tr>
        </table>
        <button  class='btn btn-warning show-posts'>Show posts</button>
        </div>";
        };
    };
    echo "<div class='copywriters row'>$user</div>";
    echo "<div class='user-info-list'>$userInfo</div>";
    ?>
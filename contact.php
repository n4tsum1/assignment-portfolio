<!DOCTYPE html>
<html>

<head> <?php include 'headings.html'?>
    <style>
        .active-3 {
            background-color: whitesmoke;
        }

    </style>


</head>



<body>
    <nav><?php include 'nav.html'?></nav>



    <main>
        <div class="container">
            <div style="text-align:center">
                <h2>Contact Me</h2>
            </div>
            <div class="row-f center">
                <!--
                <div class="column-c">
                    <img src="/w3images/map.jpg" style="width:100%">
                </div>
-->
                <div class="colum-f">
                    <form action="form.php" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Your email address..">
                        <!--
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
-->
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Never mind">
                    </form>
                </div>
            </div>
        </div>



    </main>
    <footer><?php include 'footer.html'?></footer>




</body>

</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Midterm</title>

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  </head>
  <body>
    <h1>Thanapat punchareon</h1>
    <div id="right">
        <p>
            <img alt="" src="http://i.imgur.com/L34Fib6.jpg" 
            id="imgClickAndChange" onclick="changeImage()"  />
        </p>
            <script language="javascript">
                function changeImage() {
            
                    if (document.getElementById("imgClickAndChange").src == "http://i.imgur.com/L34Fib6.jpg") 
                    {
                        document.getElementById("imgClickAndChange").src = "https://i1.sndcdn.com/artworks-000810672895-5vv94q-t300x300.jpg";
                    }
                    else 
                    {
                        document.getElementById("imgClickAndChange").src = "http://i.imgur.com/L34Fib6.jpg";
                    }
                }
            </script>
            <h2>Extracurriculars</h2>
          <ul>
            <li> Asian Dance Team
            <li> DanceTroupe
            <li> MIT Poker Club
          </ul>
    </div>

    <div id="left">
    <div class="section" id="about">
      <h1>About Me</h1> 
      <p>Hi, I'm Thanapat. I love <a href="http://en.wikipedia.org/wiki/User_interface_design">User Interface Design</a>.</p>    
    </div>

    <div class="section" id="Classes">
        <h1>Classes</h1>
        <table>
          <thead>
            <tr>
              <th>Course Number</th>
              <th>Course Title</th>

            </tr>
          </thead>
          <tbody>
            <tr>

            </tr>
            <tr class="currentlytaking">
            </tr>
              <td><a href="http://stellar.mit.edu/S/course/6/sp14/6.813/index.html">6.813</a></td>
              <td>User Interface Design</td>

            </tr>     
            <tr>
              <td><a href="http://ai6034.mit.edu/fall12/index.php?title=Main_Page">6.034</a></td>
              <td>Artificial Intelligence</td>

            </tr>
            <tr>
              <td><a href="http://stellar.mit.edu/S/course/6/fa13/6.006/">6.006</a></td>
              <td>Introduction to Algorithms</td>
 
            </tr>
            <tr>
          </tbody>
        </table>
        
      </div>


     <div class="section" id="contact">
        <h1>Contact</h1>
        <form>

          <label for="email">email:</label>
          <input id="email" type="text" name="email"><br>
          <label for="Message">Message:</label>
          <input id="Message" type="text" name="Message"><br>
            <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </body>
</html>

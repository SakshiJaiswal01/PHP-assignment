<!doctype html>
<html lang="en">
  <head> 
    <?php include("head.php"); ?>
    <title>calculator Page</title>
    <script>
        function dis(val) {
            document.getElementById("result").value += val
        }
        function solve() {
            let x = document.getElementById("result").value
            let y = eval(x)
            document.getElementById("result").value = y

            let ans=document.getElementById("result").value;
            let pp=document.createElement("p");
            pp.innerText=ans;

           let fine=document.getElementById("answer");
           fine.appendChild(pp);   
        }
        function clr() {
            document.getElementById("result").value = "";
        }
        function clearhistory()
        {
            let fine=document.getElementById("answer");

            while (fine.firstChild) {
        fine.removeChild(fine.firstChild);
            }
        }
    </script>
    <style>
        body{
        background-image: url("bgmaths.jpg");
      }
        .sec {
          margin-top: 10px;
            height: 400px;
            width: 500px;
            background: black;
            color: white;
        }
        #block1 {
            border: blue 1px dotted;
            border-radius: 10px 10px 10px 10px;
            /*t-1,t-r,b-r,b-1*/
            padding: 10px 40px 10px 20px;
            /*t,r,b,l*/
            margin: 100px;
            float: left;
        }
        #block2{
            border: blue 1px dotted;
            height: 300px;
            width: 300px;
            margin-top: 100px;
            background-color: black;
            color: white;
            padding: 10px;
            float: right;
            overflow: scroll;
        }
        #clear{
            background-color: orange;
        }
        input[type="button"] {
            background-color: lightpink;
            color: black;
            border: solid black 2px;
            height: 100%;
            width: 100%;
            font-weight: bold;
            font-size: larger;
        }
        input[type="text"] {
            background-color: white;
            border: solid black 2px;
            height: 100%;
            width: 98%;
            font-weight: bold;
        }
        table {
            margin-left: 25px;
            margin-top: 30px;
            height: 250px;
            width: 400px;
        }
    </style>
  </head>
  <body>
    <?php include("nav.php");?>
    <section class="container">
    <section class="sec" id="block1" class="col-sm-8">
      <h2>CALCULATOR</h2>
       <!-- <div class="title">CALCULATOR</div> -->
        <table border="1">
            <tr>
                <td colspan="3"><input type="text" name="res" id="result" /></td>
                
                <!-- clr() function will call clr to clear all value -->
                <td><input id="clear" type="button" value="c" onclick="clr()" /> </td>
            </tr>
            <tr>
                <!-- create button and assign value to each button -->
                <!-- dis("1") will call function dis to display value -->
                <td><input type="button" value="1" onclick="dis('1')" /> </td>
                <td><input type="button" value="2" onclick="dis('2')" /> </td>
                <td><input type="button" value="3" onclick="dis('3')" /> </td>
                <td><input type="button" value="/" onclick="dis('/')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="4" onclick="dis('4')" /> </td>
                <td><input type="button" value="5" onclick="dis('5')" /> </td>
                <td><input type="button" value="6" onclick="dis('6')" /> </td>
                <td><input type="button" value="-" onclick="dis('-')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="7" onclick="dis('7')" /> </td>
                <td><input type="button" value="8" onclick="dis('8')" /> </td>
                <td><input type="button" value="9" onclick="dis('9')" /> </td>
                <td><input type="button" value="+" onclick="dis('+')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="." onclick="dis('.')" /> </td>
                <td><input type="button" value="0" onclick="dis('0')" /> </td>
                <!-- solve function call function solve to evaluate value -->
                <form>
                    <td><input type="button" name="sub" value="=" onclick="solve()" /> </td>
                </form>
                <td><input type="button" value="*" onclick="dis('*')" /> </td>
            </tr>    
        </table>
       
    </section>
    <section class="col-sm-4"id="block2" >
      <span><h2>History</h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>    
      <button id="clearr" onclick="clearhistory()">clear</button>
      <span id="answer">  </span>
    </section>
    </section>
    <?php include("footer.php") ?>
    <?php include("foot.php");?>
  </body>
</html>
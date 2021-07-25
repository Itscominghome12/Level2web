<?php include("head_nav.html");?>


<div class="jumbotron text-center"> 
 
           
        
           
           
</div>

<div class="contact-top">
  <h1>Contact</h1>
  <h5>Use this page to contact the Canopy team</h5>
  
</div>

<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">New Zealand</option>
      <option value="canada">Australia</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>


 <div class="btn-group">
    <button type="button" class="btn btn-primary">Phone numbers</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  </div>
  
  <div class="btn-group">
    <button type="button" class="btn btn-secondary">Other Canopy sites</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-success">Doctors and Nurses</button>
    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  </div>


</body>




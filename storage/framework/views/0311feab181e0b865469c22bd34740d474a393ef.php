<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" 
    style="margin-top:40px">

      <center>
        <a href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(url('api/images/logo.png')); ?>" class="logo" style="width:200px;margin-top:-20px;margin-bottom:15px"></a>
      </center>


    <li class="nav-item" data-toggle="tooltip" data-placement="right">
      <a class="nav-link nav-link-collapse collapsed" 
          data-toggle="collapse" href="#collapse01">&nbsp;&nbsp;&nbsp;
        <span class="nav-link-text">Categories </span>
      </a>
      <ul class="sidenav-second-level collapse moka" style="display: block" id="collapse01">
        <li class="hasLi "><a href="#api_cat_list">List</a></li>
        <li class="hasLi "><a href="#api_cat_create">Create</a></li>
        <li class="hasLi "><a href="#api_cat_update">Update</a></li>
        <li class="hasLi "><a href="#api_cat_destroy">Destroy</a></li>
      </ul>
    </li>


    <li class="nav-item" data-toggle="tooltip" data-placement="right">
      <a class="nav-link nav-link-collapse collapsed" 
          data-toggle="collapse" href="#collapse02">&nbsp;&nbsp;&nbsp;
        <span class="nav-link-text">News </span>
      </a>
      <ul class="sidenav-second-level collapse moka" style="display: block;" id="collapse02">
        <li class="hasLi "><a href="#api_news_list">List</a></li>
        <li class="hasLi "><a href="#api_news_detail">Detail</a></li>
        <li class="hasLi "><a href="#api_news_create">Create</a></li>
        <li class="hasLi "><a href="#api_news_update">Update</a></li>
        <li class="hasLi "><a href="#api_news_destroy">Destroy</a></li>
        <li class="hasLi "><a href="#api_news_search">Search</a></li>
      </ul>
    </li>
        
    <li><br/><br/><br/><br/></li>

      </ul>
    </div>
  </nav>
<?php /* /Users/apple/Sites/dev/RestApi_Task/resources/views/api/docs/navigation.blade.php */ ?>
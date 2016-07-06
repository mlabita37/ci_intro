<h1>{{ message }}</h1>

<form role="form" name="userForm" ng-submit="addUser()" method="post">
  <div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" placeholder="Login" id="login" name="login" ng-model="user.login" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" ng-model="user.password" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Email" id="email" name="email" ng-model="user.email" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
</form>




<!-- <table ng-controller="UserController" class="table table-bordered table-condensed table-responsive"> -->
      <!-- <li>ID:</li>
      <li>Email:</li> -->

<ul id="myList" class="list-group">
      <li ng-repeat="user in users | startFrom:currentPage*pageSize | limitTo:pageSize"><span class="label label-default label-pill pull-xs-right">{{user.id}}</span> {{user.email}}</li>
</ul>



<button ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1">
  Previous
</button>
{{currentPage+1}}/{{numberOfPages()}}
<button ng-disabled="currentPage >= data.length/pageSize - 1" ng-click="currentPage=currentPage+1">
  Next
</button>

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li class="active">Register</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        Register <br />
        <span>Create New Account</span>
    </h2>
    <!-- Main Heading Ends -->
    <!-- Registration Section Starts -->
    <section class="registration-area ">
        <div class="row ">
            <div class="col-sm-6 ">
                <!-- Registration Block Starts -->
                <div class="panel panel-smart ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Registration Form Starts -->
                        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url();?>/register_user/add_user">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label">Full Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFullName" placeholder="First Name" name="fullName" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLname" class="col-sm-3 control-label">NIC :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputNic" placeholder="NIC" name="nic" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="mail" name="email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone" placeholder="phone" name="phone" required="">
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Fax :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFax" placeholder="Fax">
                                </div>
                            </div>-->
<!--                             Personal Information Ends 
                            <h3 class="panel-heading inner">
                                Delivery Information
                            </h3>
                             Delivery Information Starts -->
<!--                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">Company :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompany" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompanyId" class="col-sm-3 control-label">Company ID :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompanyId" placeholder="Company ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress1" placeholder="Address/1">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label for="inputAddress2" class="col-sm-3 control-label">Address/2 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" required="">
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label for="inputCity" class="col-sm-3 control-label">City :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputCountry">
                                        <option>- All Countries -</option>
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRegion" class="col-sm-3 control-label">Region :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputRegion">
                                        <option>- All Regions -</option>
                                    </select>
                                </div>
                            </div>-->
                            <!-- Delivery Information Ends -->
                            <h3 class="panel-heading inner">
                                Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label" >Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRePassword" class="col-sm-3 control-label">Re-Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputRePassword" placeholder="rePassword" name="rePassword" required="">
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <span class="col-sm-3 control-label">Newsletter :</span>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Subscribe
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1">
                                            Unsubscribe
                                        </label>
                                    </div>
                                </div>
                            </div>-->
<!--                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I'v read and agreed on Conditions
                                        </label>
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-black" id="submit_register">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <!-- Password Area Ends -->
                        </form>
                        <!-- Registration Form Starts -->
                    </div>							
                </div>
                <!-- Registration Block Ends -->
            </div>
<!--            <div class="col-sm-6">
                 Guest Checkout Panel Starts 
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Checkout as Guest
                        </h3>
                    </div>-->
<!--                   <div class="panel-body">
                        <p>
                            Checkout as a guest instead!
                        </p>
                        <button class="btn btn-black">As Guest</button>
                    </div>
                </div>
                 Guest Checkout Panel Ends 
                 Conditions Panel Starts 
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Conditions
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including  versions of Lorem Ipsum.
                        </p>
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                        <p>
                            HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. 
                        </p>
                        <p>
                            Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. 
                        </p>
                        <p>
                            Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. 
                        </p>
                        <p>
                            Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst. 
                        </p>
                    </div>
                </div>
                 Conditions Panel Ends 
            </div>-->
        </div>
    </section>
    <!-- Registration Section Ends -->
</div>
<!-- Main Container Ends -->
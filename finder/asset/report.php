<div class="card">
    <div class="card-header"><h3 align="center">Add an announce</h3></div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="registrationForm" method="post" action="system/upload.php" enctype="multipart/form-data">

                              <div class="form-group">
                                <div class="col-xs-6">
                                  <label for="text">Name</label> 
                                  <input id="name" name="name" placeholder="Enter Title here" class="form-control here" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group"> 
                                <div class="col-xs-6">
                                <label for="text">Catagory</label>
                                <select class="form-control" name="catagory" id="catagory">
                                  <option value="All" disabled selected>Choose your option</option>
                                  <option value="Phone">Phone</option>
                                  <option value="Money">Money</option>
                                  <option value="Other">Other</option>
                                </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-xs-6">
                                <label for="text">School</label> 
                                <select class="form-control" id="school" name="school">
                                  <option value="All" disabled selected>Choose your option</option>
                                  <option value="Lampang Kanlayanee School">Lampang Kanlayanee School</option>
                                  <option value="XXXXX">XXXXX</option>
                                  <option value="Other">Other</option>
                                </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-xs-6">
                                  <label for="textarea">Where?</label> 
                                  <input id="whither" name="whither" placeholder="Where it lost?"  class="form-control here" type="text">
                                </div>
                              </div> 

                              <div class="form-group"> 
                                <div class="col-xs-6">
                                <label for="textarea">Details</label>
                                  <textarea id="details" name="details" type="text" cols="50" rows="5" class="form-control"></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-xs-6" >
                              <input type="file" name="images[]" id="imgs" >
                              </div>
                              </div>
                            <center>
                              <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="btnSend" id="btnSend" value="Save">
                              </div>
                            </center>

                            </form>
                    </div>
                </div>
              </div>
            </div>
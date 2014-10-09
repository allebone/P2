        <div class="row marketing">
            <div class="col-lg-6" id="about">
                <h4>About</h4>


                <p>As mentioned in the comic at: <a href="http://xkcd.com/936/">http://xkcd.com/936/</a>, the XKCD method of generating passwords is based on the entropy intalled by using  </p>


                <h4></h4>


                <p></p>
            </div>
        </div>

        <div class="jumbotron" id="generator">
            <h4>XKCD Password Generator</h4>

            <p>
            <div class="bs-example">
                <form method="POST" action="./index.php">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control input-lg" placeholder="Click Generate to Create Password" type="text"
                                readonly><?php require ('logic.php');?></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">                    
                                <h5>Number of Words: </h5>
                                <input name="numWords" class="form-control input-lg" value="5">
                            </div>   
                            
                            <div class="col-md-6"> 
                             <h5>Special Character:</h5>
                             <select  name="specChar" class="form-control input-lg">
                             <option>None</option>
                             <option>!</option>
                             <option>@</option>
                             <option>#</option>
                             <option>$</option>
                             <option>%</option>
                             <option>^</option>
                             <option>*</option>
                             <option>+</option>
                             </select>    
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Case:</h5>
                                <select  name="caseChoice" class="form-control input-lg">
                                <option>lower</option>
                                <option>UPPER</option>
                                <option>CamelCase</option>                            
                                </select>
                            </div>

                            <div class="col-md-6">                            
                                <h5>Number?</h5>
                                <select  name="number" class="form-control input-lg">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                            </div> 
                        </div>               
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Generate">      
                            </div>
                        </div>    
                </form>

            </div>            
        </div>



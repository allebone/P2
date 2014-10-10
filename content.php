        <div class="row marketing">
            <div class="col-lg-6" id="about">
                <h4>About</h4>


                <p><h3>XKCD passwords (as demonstrated in the comic at:http://xkcd.com/936/) is a method to maintain an easy to remember password that also meets most complexity requirements. It's core/fundamental means is by generating unrelated words from a wordlist (or database) that increase length while giving the option of including Special Characters, Numbers, or alternate cases.  These combined efforts produce a password of entropy (length) long enough to deride most attempts at Brute Force attack.


                <h4>Demo</h4>


                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at
                eros. Cras mattis consectetur purus sit amet fermentum.</p>
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
                                readonly>
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



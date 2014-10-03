        
            <h4>XKCD Password Generator</h4>

            <p>


                <form method="POST" action="./logic.php">
                                <input class="form-control input-lg" placeholder="Click Generate to Create Password" type="text" readonly>
                                <h5>Number of Words: </h5>
                                <input name="numWords" class="form-control input-lg" value="5">
                            
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

                                <h5>Case:</h5><select  name="caseChoice" class="form-control input-lg">
                                <option>lower</option>
                                <option>UPPER</option>
                                <option>CamelCase</option>                            
                                </select>

                                <h5>Number?</h5><select  name="number" class="form-control input-lg">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                        <br>
                                <input type="submit" value="Generate">      
                </form>




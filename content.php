
<div class="row marketing">
    <div class="col-lg-12" id="about">
        <h4>About</h4>


        <p>XKCD passwords (as demonstrated in the comic at: <a href="http://xkcd.com/936/">http://xkcd.com/936/</a> is a method to maintain an easy to remember password that also meets most complexity requirements. It's core/fundamental means is by generating unrelated words from a wordlist (or database) that increase length while giving the option of including Special Characters, Numbers, or alternate cases.  These combined efforts produce a password of entropy (length) long enough to deride most attempts at Brute Force attack.</p>


        <h4>Demo</h4>

        <p>Demo of the below page can be found at: http://demoplace</p>

    </div>
</div>

<div class="jumbotron" id="generator">
    <h4>XKCD Password Generator</h4>




    <div class="bs-example">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <input class="form-control input-lg" placeholder="Click Generate to Create Password" type="text" value="<?php echo $password; ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5>Number of Words: </h5>
                    <input name="numWords" id="numWords" class="form-control input-lg"
                           type="number"
                           min="0"
                           max="10"
                           step="1"
                           value="5">
                </div>

                <div class="col-md-6">
                    <h5>Special Character:</h5>
                    <select  name="specChar" id= "spechChar" class="form-control input-lg">
                        <option value="">None</option>
                        <option value="!">!</option>
                        <option value="@">@</option>
                        <option value="#">#</option>
                        <option value="$">$</option>
                        <option value="%">%</option>
                        <option value="^">^</option>
                        <option value="*">*</option>
                        <option value="+">+</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5>Case:</h5>
                    <select  name="caseChoice" id="caseChoice" class="form-control input-lg">
                        <option value="lower">lower</option>
                        <option value="upper">UPPER</option>
                        <option value="camel">CamelCase</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <h5>Include A Number?</h5>
                    <select name="number" id="number" class="form-control input-lg">
                        <option value="true">Yes</option>
                        <option value="false">No</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input name="submit1" type="submit" value="Generate">
                </div>
            </div>
        </form>

    </div>
</div>



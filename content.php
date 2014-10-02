<?php require( 'logic.php'); ?>

<div id="wrapper">
    <form method="POST" action="index.php">
        <div id="container">

            <div id="head">

                <h1>xkcd Password Generator</h1>
                <div id="inlineblock">
                    <label id="passwordphrase">Your password is:</label>
                    <label id="passwordvalue"><?php echo ($password) ? ($password) : ''; ?>
                    </label>
                </div>
                <br/><br/>

                <h2>Generate a new password below</h2>
            </div>
            
            <fieldset>
                <legend>Word Criteria</legend>
                <select name="num_words" id="num_words">
                    <option class="diffcolor" value="None" disabled="disabled">None</option>
                    <option class="diffcolor" value="1">1</option>
                    <option class="diffcolor" value="2">2</option>
                    <option class="diffcolor" value="3">3</option>
                    <option class="diffcolor" value="4" selected='selected'>4</option>
                    <option class="diffcolor" value="5">5</option>
                    <option class="diffcolor" value="6">6</option>
                    <option class="diffcolor" value="7">7</option>
                    <option class="diffcolor" value="8">8</option>
                    <option class="diffcolor" value="9">9</option>
                    <option class="diffcolor" value="10">10</option>
                </select>
                <label for="num_words">The number of words to use in the password.  <em>NOTE:</em> Four or more are recommended.</label>
                <br /><br />
                
                <select name="symbol" id="symbol">
                    <option class="diffcolor" value="None" selected='selected'>None</option>
                    <option class="diffcolor" value="~">~</option>
                    <option class="diffcolor" value="!">!</option>
                    <option class="diffcolor" value="@">@</option>
                    <option class="diffcolor" value="#">#</option>
                    <option class="diffcolor" value="$">$</option>
                    <option class="diffcolor" value="%">%</option>
                    <option class="diffcolor" value="^">^</option>
                    <option class="diffcolor" value="&">&</option>
                    <option class="diffcolor" value="*">*</option>
                    <option class="diffcolor" value="+">+</option>
                    <option class="diffcolor" value="|">|</option>
                </select>
                <label for="symbol">A specific symbol to use in the password?</label>
                <br /><br />
                
                <select name="specificnumber" id="specificnumber">
                    <option class="diffcolor" value="None" selected='selected'>None</option>
                    <option class="diffcolor" value="0">0</option>
                    <option class="diffcolor" value="1">1</option>
                    <option class="diffcolor" value="2">2</option>
                    <option class="diffcolor" value="3">3</option>
                    <option class="diffcolor" value="4">4</option>
                    <option class="diffcolor" value="5">5</option>
                    <option class="diffcolor" value="6">6</option>
                    <option class="diffcolor" value="7">7</option>
                    <option class="diffcolor" value="8">8</option>
                    <option class="diffcolor" value="9">9</option>
                    
                </select>
                <label for="specificnumber">A lucky number to use in the password?</label>
                <br />

            </fieldset>

            <fieldset>
                <legend>Upper and Lower Case</legend>
                <table width="100%" border="0">
                    <colgroup>
                        <col width="50%" span="2" />
                    </colgroup>
                    <tr valign="top">
                        <td>
                            <input type="radio" name="case_transform" value="NONE" checked="checked" />Don't make any changes from the dictionary
                            <br />
                            <input type="radio" name="case_transform" value="UPPER" />MAKE ALL WORDS COMPLETELY UPPERCASE
                            <br />
                            <input type="radio" name="case_transform" value="LOWER" />make all words completely lowercase
                            <br />
                            <input type="radio" name="case_transform" value="CAPITAL" />Capitalize The First Letter Of Every Word
                            <br />
                            <input type="radio" name="case_transform" value="ALTERNATE" />alternate THE case OF each SUBSEQUENT word
                            <br />
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br />

            <input type="submit" name="submit" value="Submit" id="submit" />
            <br />
        </div>
    </form>
</div>
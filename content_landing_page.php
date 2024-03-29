<h1>The Ineffectiveness of Password Generation Techniques</h1>

    <h2>Hard for Humans to Remember: Easy for Computers to Guess</h2>
    <p id="currently">
        Recently, brute-force password-cracking attacks have resulted in a
        plethora of data breaches internationally.  
        Clearly, the methods used for password generation are not proving 
        effective at protecting our passwords.
        <span class="example">Example generated by password-generating program: 1W6z0VA#Kz.</span>
        This is a very difficult password to remember; however, when people use
        easy-to-remember passwords involving words and personal information, 
        brute-force attacks get through.
    </p><br />
    
    <h2>Easy for Humans to Remember: Hard for Computers to Guess -  
        <span class="example"> <em>xkcd Password Generation</em></span></h2>
    <p id="currently">
        The idea behind <a href="http://xkcd.com/936/">xkcd Password Generation</a>, 
        as well as the xkcd Password Generator application below, is to
        combine a requested number of random words from a dictionary, perform any 
        capitalization transformations or substitutions selected by the user, and 
        then append the words into one password string. These passwords are proving much easier for people
        to remember, yet are taking longer for brute-force attacks to crack.
        <span class="example">Example generated by xkcd password-generating program: 
        Backlists-Bravura-Ologist-Adventured.</span></p>
    
    <h1 class="give_it_a_try">Give It A Try Below!</h1>

    <?php include( 'home.php'); ?>
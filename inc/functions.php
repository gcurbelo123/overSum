<?php
    function chooseChar()
    {
        $char = rand(1,26);
        echo "<img id = 'hero' src = './Overwatch Characters/$char.jpg'/>";
        echo "</br>";
        echoInfo($char);
        echo "</br>";
        echo "</br>";
        echoForm($char);
    }
    
    function echoInfo($char){
        $char = $char - 1;
        $names = array("Ana", "Bastion", "D.Va", "Doomfist", "Genji", "Hanzo", "Junkrat", "Lucio", "McCree", "Mei", "Mercy", "Moira", "Orisa", "Pharah", "Reaper", "Reinhardt", "Roadhog", "Soldier", "Sombra", "Symmetra", "Torbjorn", "Tracer", "Widowmaker", "Winston", "Zarya", "Zenyatta");
        echo "<h1 id = 'heroName'>$names[$char]</h1></br>";
        switch($char + 1){
            case 1:
                echo "<h2 id = 'bio'>
                        Real Name: Ana Amari, Age: 60</br></br>
                        Occupation: Bounty Hunter</br></br>
                        Base of Operations: Cairo, Egypt</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>One of the founding members of Overwatch, Ana uses her skills and expertise to defend her home and the people she cares for.</h2>";
                break;
            case 2:
                echo "<h2 id = 'bio'>
                        Real Name: SST Laboratories Siege Automaton E54, 'Bastion', Age: 30</br></br>
                        Occupation: Battle Automation</br></br>
                        Base of Operations: Unkown</br></br>
                        Affiliation: None</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Once a frontline combatant in the devastating Omnic Crisis, this curious Bastion unit now explores the world, fascinated by nature but wary of a fearful humanity.</h2>";
                break;
            case 3:
                echo "<h2 id = 'bio'>
                        Real Name: Hana Song, Age: 19</br></br>
                        Occupation: Pro Gamer (formerly), Mech Pilot</br></br>
                        Base of Operations: Busan, South Korea</br></br>
                        Affiliation: Exo-Force of the Korean Army</br></br>
                     </h2>";
                echo "<h2 id = 'info'>D.Va is a former professional gamer who now uses her skills to pilot a state-of-the-art mech in defense of her homeland.</h2>";
                break;
            case 4:
                echo "<h2 id = 'bio'>
                        Real Name: Akande Ogundimu, Age: 45</br></br>
                        Occupation: Mercenary</br></br>
                        Base of Operations: Oyo, Nigeria</br></br>
                        Affiliation: Talon</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Recently freed from imprisonment, Doomfist is determined to plunge the world into a new conflict that he believes will make humanity stronger.</h2>";
                break;
            case 5:
                echo "<h2 id = 'bio'>
                        Real Name: Genji Shimada, Age: 35</br></br>
                        Occupation: Adventurer</br></br>
                        Base of Operations: Shambali Monastery, Nepal</br></br>
                        Affiliation: Clan (formerly), Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>The cyborg Genji Shimada has made peace with the augmented body he once rejected, and in doing so, he has discovered a higher humanity.</h2>";
                break;
            case 6:
                echo "<h2 id = 'bio'>
                        Real Name: Hanzo Shimada, Age: 38</br></br>
                        Occupation: Mercenary, Assassin</br></br>
                        Base of Operations: Hanamura, Japan (formerly)</br></br>
                        Affiliation: Shimada Clan</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Mastering his skills as a bowman and an assassin, Hanzo Shimada strives to prove himself as a warrior without peer.</h2>";
                break;
            case 7:
                echo "<h2 id = 'bio'>
                        Real Name: Jamison Fawkes, Age: 25</br></br>
                        Occupation: Anarchist, Thief, Demolitionist, Mercenary, Scavenger</br></br>
                        Base of Operations: Junkertown, Australia (formerly)</br></br>
                        Affiliation: Junkers (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Junkrat is an explosives-obsessed freak who lives to cause chaos and destruction.</h2>";
                break;
            case 8:
                echo "<h2 id = 'bio'>
                        Real Name: Lucio Correia dos Santos, Age: 26</br></br>
                        Occupation: DJ, Freedom Fighter</br></br>
                        Base of Operations: Rio de Janeiro, Brazil</br></br>
                        Affiliation: None</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Lucio is an international celebrity who inspires social change through his music and actions.</h2>";
                break;
            case 9:
                echo "<h2 id = 'bio'>
                        Real Name: Jesse McCree, Age: 37</br></br>
                        Occupation: Bounty Hunter</br></br>
                        Base of Operations: Santa Fe, New Mexico, USA</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Armed with his Peacekeeper revolver, the outlaw Jesse McCree doles out justice on his own terms.</h2>";
                break;
            case 10:
                echo "<h2 id = 'bio'>
                        Real Name: Mei-Ling Zhou, Age: 31</br></br>
                        Occupation: Climatologist, Adventurer</br></br>
                        Base of Operations: Xi'an, China (formerly)</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2>Mei is a scientist who has taken the fight to preserve the environment into her own hands.</h2>";
                break;
            case 11:
                echo "<h2 id = 'bio'>
                        Real Name: Angela Ziegler, Age: 37</br></br>
                        Occupation: Field Medic, First Responder</br></br>
                        Base of Operations: Zurich, Switzerland</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>A guardian angel to those who come under her care, Dr. Angela Ziegler is a peerless healer, a brilliant scientist, and a staunch advocate for peace.</h2>";
                break;
            case 12:
                echo "<h2 id = 'bio'>
                        Real Name: Moira O'Deorain, Age: 48</br></br>
                        Occupation: Geneticist</br></br>
                        Base of Operations: Dublin, Ireland; Oasis, Iraq</br></br>
                        Affiliation: Talon; Blackwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Equal parts brilliant and controversial, scientist Moira O'Deorain is on the cutting edge of genetic engineering, searching for a way to rewrite the fundamental building blocks of life.</h2>";
                break;
            case 13:
                echo "<h2 id = 'bio'>
                        Real Name: Orisa, Age: 1 month</br></br>
                        Occupation: Guardian Robot</br></br>
                        Base of Operations: Numbani</br></br>
                        Affiliation: None</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Built from parts of one of Numbani's short-lived OR15 defense robots, Orisa is the city's newest protector, though she still has much to learn.</h2>";
                break;
            case 14:
                echo "<h2 id = 'bio'>
                        Real Name: Fareeha Amari, Age: 32</br></br>
                        Occupation: Security Chief</br></br>
                        Base of Operations: Giza, Egypt</br></br>
                        Affiliation: Helix Security International</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Fareeha Amari's commitment to duty runs in her blood. She comes from a long line of highly decorated soldiers and burns with the desire to serve with honor.</h2>";
                break;
            case 15:
                echo "<h2 id = 'bio'>
                        Real Name: Unknown, Age: Unknown</br></br>
                        Occupation: Mercenary</br></br>
                        Base of Operations: Unknown</br></br>
                        Affiliation: Unknown</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Some speak of a black-robed terrorist known only as the Reaper. His identity and motives are a mystery. What is known is that where he appears, death follows.</h2>";
                break;
            case 16:
                echo "<h2 id = 'bio'>
                        Real Name: Reinhardt Wilhelm, Age: 61</br></br>
                        Occupation: Adventurer</br></br>
                        Base of Operations: Stuttgart, Germany</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Reinhardt Wilhelm styles himself as a champion of a bygone age, who lives by the knightly codes of valor, justice, and courage.</h2>";
                break;
            case 17:
                echo "<h2 id = 'bio'>
                        Real Name: Mako Rutledge, Age: 48</br></br>
                        Occupation: Enforcer (formerly), Bodyguard</br></br>
                        Base of Operations: Junkertown, Australia (formerly)</br></br>
                        Affiliation: Junkers (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Roadhog is a ruthless killer with a well-earned reputation for cruelty and wanton destruction.</h2>";
                break;
            case 18:
                echo "<h2 id = 'bio'>
                        Real Name: Unknown, Age: Unknown</br></br>
                        Occupation: Vigilante</br></br>
                        Base of Operations: Unknown</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Currently the target of an international manhunt, the vigilante known as Soldier: 76 wages a personal war to expose the truth behind Overwatch's collapse.</h2>";
                break;
            case 19:
                echo "<h2 id = 'bio'>
                        Real Name: ??????, Age: 30</br></br>
                        Occupation: Hacker</br></br>
                        Base of Operations: Dorado, Mexico</br></br>
                        Affiliation: Talon, Los Muertos (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>One of the world's most notorious hackers, Sombra uses information to manipulate those in power.</h2>";
                break;
            case 20:
                echo "<h2 id = 'bio'>
                        Real Name: Satya Vaswani, Age: 28</br></br>
                        Occupation: Architech</br></br>
                        Base of Operations: Utopaea, India</br></br>
                        Affiliation: Vishkar Corporation</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Symmetra literally bends reality. By manipulating hard-light constructs, she crafts the world as she wishes it to be, in hopes of engineering a perfect society.</h2>";
                break;
            case 21:
                echo "<h2 id = 'bio'>
                        Real Name: Torbjorn Lindholm, Age: 57</br></br>
                        Occupation: Weapons Designer</br></br>
                        Base of Operations: Gothenburg, Sweden</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>At its height, Overwatch possessed one of the most advanced armaments on the planet, which could be traced to the workshop of an ingenious engineer named Torbjorn Lindholm.</h2>";
                break;
            case 22:
                echo "<h2 id = 'bio'>
                        Real Name: Lena Oxton, Age: 26</br></br>
                        Occupation: Adventurer</br></br>
                        Base of Operations: London, England</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>The former Overwatch agent known as Tracer is a time-jumping adventurer and an irrepressible force for good.</h2>";
                break;
            case 23:
                echo "<h2 id = 'bio'>
                        Real Name: Amelie Lacroix, Age: 33</br></br>
                        Occupation: Assassin</br></br>
                        Base of Operations: Annecy, France</br></br>
                        Affiliation: Talon</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Widowmaker is the perfect assassin: a patient, ruthlessly efficient killer who shows neither emotion nor remorse.</h2>";
                break;
            case 24:
                echo "<h2 id = 'bio'>
                        Real Name: Winston, Age: 29</br></br>
                        Occupation: Scientist, Adventurer</br></br>
                        Base of Operations: Horizon Lunar Colony (formerly)</br></br>
                        Affiliation: Overwatch (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>A super-intelligent, genetically engineered gorilla, Winston is a brilliant scientist and a champion for humanity's potential.</h2>";
                break;
            case 25:
                echo "<h2 id = 'bio'>
                        Real Name: Aleksandra Zaryanova, Age: 28</br></br>
                        Occupation: Soldier</br></br>
                        Base of Operations: Krasnoyarsk Front, Russia</br></br>
                        Affiliation: Russian Defense Forces</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Aleksandra Zaryanova is one of the world's strongest women, a celebrated athlete who sacrificed personal glory to protect her family, friends, and country in a time of war.</h2>";
                break;
            case 26:
                echo "<h2 id = 'bio'>
                        Real Name: Tekhartha Zenyatta, Age: 20</br></br>
                        Occupation: Wandering Guru, Adventurer</br></br>
                        Base of Operations: Shambali Monastery, Nepal (formerly)</br></br>
                        Affiliation: The Shambali (formerly)</br></br>
                     </h2>";
                echo "<h2 id = 'info'>Zenyatta is an omnic monk who wanders the world in search of spiritual enlightenment. It is said that those who cross his path are never the same again.</h2>";
                break;
        }
    }
    
    function echoForm($char){
        $char = $char - 1;
        $sayings = array("Shh. The Adults are talking.", "Woop Woop", "Defense Matrix activated.", "Only through conflict do we evolve.", "Mara Mara", "Expect nothing less", "Fire in the hole!", "This Payload is bumping!", "Its High Noon", "Sorry, sorry, sorry", "Heroes never die!", "What an interesting hypothesis", "Im simply following my programming", "Justice rains from above", "Die, die, die!", "Courage, justice, Reinhardt!", "Im going Whole Hog!", "Ive got you in my sights", "Anything can be hacked, and anyone", "My teleporter is online", "Im giving it all Ive got!", "Cheers love, the cavalrys here!", "A single death can change everything", "Excuse me for, jumping in", "In Russia, game plays you", "Step into the iris");
        echo"<form id = 'again'>
                <input type = 'submit' value = '$sayings[$char]'/>
            </form>";
    }
    
    function hero(){
        chooseChar();
    }
    
    function allHeros(){
        $j = 0;
        $names = array("Ana", "Bastion", "D.Va", "Doomfist", "Genji", "Hanzo", "Junkrat", "Lucio", "McCree", "Mei", "Mercy", "Moira", "Orisa", "Pharah", "Reaper", "Reinhardt", "Roadhog", "Soldier", "Sombra", "Symmetra", "Torbjorn", "Tracer", "Widowmaker", "Winston", "Zarya", "Zenyatta");
        for($i = 1; $i < 27; $i++){
            echo "<img id = 'allHero' src = './Overwatch Characters/$i.jpg'/>";
            echo "<h1 id = 'allHeroName'>$names[$j]</h1>";
            echo "</br>";
            $j++;
        }
    }    

?>
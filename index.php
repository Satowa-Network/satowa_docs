<!doctype html>
<html lang="de">
<head>
    <?php
        $titleb="Introduction";
        include __DIR__.'/assets/php/head.php';
    ?>
    <script>
        addEventListener('load', function(event) { PR.prettyPrint(); }, false);

    </script>
    <title><?php echo $title ?></title>
</head>
<body>

    <?php
        require __DIR__.'/assets/php/body.php';
    ?>
    <div class="container">
        <h1>Satowa Network Introduction</h1>
        <hr>
        <h2><b>Was ist das?</b></h2>
        <p>Das ist eine Public API mit Discord Benutzern die von dem Satowa Network gemeldet und akzeptiert wurden.<br>Diese API ist öffentlich frei zugänglich und basiert auf öffentliche Daten.</p>
        <h2>FAQ:</h2>
        <ol>
            <li><p>Welche header werden benötigt?</p>
                <ul><p>Es wird für die API eine application/json header benötigt der rest wird vom server selber ausgewählt</p></ul>
            </li>
            <li>
                <p>Wird eine Authentifizierung angefordert?</p>
                <ul><p>Nein diese API ist öffentlich frei zugänglich das einzige was benötigt wird ist eine aktive Internetverbindung :D</p></ul>
            </li>
        </ol>
        <h2>Code Beispiele:</h2>
        <p>Du findest Code Beispiele für PHP, JS, NodeJS und Python <a href="example.phtml">hier</a></p>
        <h1>Installation</h1>
        <p>Hier ist ein Beispiel in JS für ein Discord Bot wie du es nutzen kannst...</p>
        <div class="code_section">
            <pre>
                <code class="language-javascript" onclick="copyPHP()" id="php">
                    // discord.js Package Import
                    const { Client, Collection, Intents, MessageAttachment, MessageEmbed, MessageButton } = require('discord.js')
                    // Create Bot Client
                    const client = new Client({ intents: [Intents.FLAGS.DIRECT_MESSAGES, Intents.FLAGS.DIRECT_MESSAGE_REACTIONS, Intents.FLAGS.DIRECT_MESSAGE_TYPING, Intents.FLAGS.GUILDS, Intents.FLAGS.GUILD_BANS, Intents.FLAGS.GUILD_EMOJIS_AND_STICKERS, Intents.FLAGS.GUILD_INTEGRATIONS, Intents.FLAGS.GUILD_INVITES, Intents.FLAGS.GUILD_MEMBERS, Intents.FLAGS.GUILD_MESSAGES, Intents.FLAGS.GUILD_MESSAGE_REACTIONS, Intents.FLAGS.GUILD_MESSAGE_TYPING, Intents.FLAGS.GUILD_PRESENCES, Intents.FLAGS.GUILD_VOICE_STATES, Intents.FLAGS.GUILD_WEBHOOKS] })// Login in Client
                    client.login(process.env.TOKEN)
                    // Set Prefix
                    const prefix = process.env.PREFIX
                    client.once('ready', async () => {
                      client.user.setStatus('online')
                    });
                    var request = require('request');
                    var options = {
                      'method': 'POST',
                      'url': 'api.satowa-network.at/reports/api.php',
                      'headers': {
                      }
                    };
                    request(options, function (error, response) {
                      if (error) throw new Error(error);
                      console.log(response.body);
                    });
                    // Create a Guild Member Add Event
                    client.on("guildMemberAdd", (member) => {
                        // if this user includes one of the member id's in the blacklist
                        if (liste.includes(member.id)) {
                            // if the id matchs with 845759720547155978 return and do nothing
                            if (member.guild.id === '845759720547155978') return;
                            if (member) {
                                // Send the member a warn message why he is kicked from the Server and where he can call a Admin
                                let GKSMM = new MessageEmbed()
                                    .setTitle("Du wurdest gekickt")
                                    .setDescription(`Sie wurden von dem **__${member.guild.name}__** Discord Server gekickt, da Sie auf der Offiziellen Satowa Network Blacklist stehen.`)
                                member.send({embeds: [GKSMM]})
                                let gkslm = new MessageEmbed()
                                    .setTitle('Member Kicked')
                                    .setDescription(`Der User ${member.id} wurde soeben vom ${member.guild.name} gekickt!`)
                                    .addField(`Username: `, member.user.username)
                                    .addField(`ID: `, member.id, true)
                                    .addField(`Servername: `, member.guild.name)
                                    .addField(`Server ID: `, member.id, true)
                                    .addField(`Server Owner`, member.guild.ownerId)
                                    .setColor("GREEN")
                                client.guilds.cache.get('845759720547155978').channels.cache.get('873661489385459732').send({embeds: [gkslm]})
                                member
                                    // kicks the member with a reason
                                    .kick('[Auto MOD] >> Auto Kick by Satowa Network Security Systems')
                                    // then
                                    .then(description => {
                                        // if there is a error
                                        if (error) {
                                            // Send the Error in the Bot Console
                                            console.log(col.red('Es gab ein fehler beim kicken der Blacklisted User'))
                                            // create a embed with the name gksoe
                                            let gksoe = new MessageEmbed()
                                                // set the Title
                                                .setTitle('Fehler beim Global Kick System')
                                                // Set the Description
                                                .setDescription('<@&864495655242301470> und <@&863867774244618271>  Es gab ein Fehler bei dem Global Kick System! Bitte nehmen Sie den Invite an und versuchen Sie den Fehler zu ermitteln!\n\r' + member.guild.channels.cache.random().createInvite({
                                                    maxAge: 10 * 60 * 1000,
                                                    maxUses: 2,
                                                    reason: 'Invite für Satowa Network Developer weil ein Fehler erkannt wurde! Die Developer wurden bereits Informiert.'
                                                }), error)
                                                // set the Colo
                                                .setColor('#ff0000')
                                                // set the author
                                                .setAuthor('Satowa Network Sicherheit\'s Benachrichtigungen')
                                            // send the error to the channel
                                            client.channels.cache.get('846040160214057010').send({embeds: [gksoe]})
                                        }
                                    })
                            }
                        }
                    });

                </code>
            </pre>
        </div>
    </div>
    <?php
        require __DIR__.'/assets/php/footer.php';
    ?>

</body>
</html>
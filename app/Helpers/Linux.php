<?php
namespace App\Helpers;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

/**
 * Linux Helper
 *
 * https://symfony.com/doc/current/components/process.html
 * https://linuxize.com/post/how-to-create-users-in-linux-using-the-useradd-command/
 *
 */
class Linux
{

    /**
     * Add Linux user to the system
     *
     * @param string $username linux username
     *
     *
     */
    public static function userAdd(string $username = '')
    {
        if (!empty($username)) {
            // -m generate home directory
            $process = new Process(['useradd', '-m', $username]);
            $process->run();

            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }

            echo $process->getOutput();

        }
    }
}

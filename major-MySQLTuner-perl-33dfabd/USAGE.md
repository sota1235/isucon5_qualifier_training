# NAME

    MySQLTuner 1.6.10 - MySQL High Performance Tuning Script

# IMPORTANT USAGE GUIDELINES

To run the script with the default options, run the script without arguments
Allow MySQL server to run for at least 24-48 hours before trusting suggestions
Some routines may require root level privileges (script will provide warnings)
You must provide the remote server's total memory when connecting to other servers

# CONNECTION AND AUTHENTIFICATION

    --host <hostname>    Connect to a remote host to perform tests (default: localhost)
    --socket <socket>    Use a different socket for a local connection
    --port <port>        Port to use for connection (default: 3306)
    --user <username>    Username to use for authentication
    --pass <password>    Password to use for authentication
    --mysqladmin <path>  Path to a custom mysqladmin executable
    --mysqlcmd <path>    Path to a custom mysql executable

# PERFORMANCE AND REPORTING OPTIONS

    --skipsize                  Don't enumerate tables and their types/sizes (default: on)
                                (Recommended for servers with many tables)
    --skippassword              Don't perform checks on user passwords(default: off)
    --checkversion              Check for updates to MySQLTuner (default: don't check)
    --updateversion             Check for updates to MySQLTuner and update when newer version is available (default: don't check)
    --forcemem <size>           Amount of RAM installed in megabytes
    --forceswap <size>          Amount of swap memory configured in megabytes
    --passwordfile <path>       Path to a password file list(one password by line)

# OUTPUT OPTIONS

    --silent                    Don't output anything on screen
    --nogood                    Remove OK responses
    --nobad                     Remove negative/suggestion responses
    --noinfo                    Remove informational responses
    --debug                     Print debug information
    --dbstat                    Print database information
    --idxstat                   Print index information
    --sysstat                   Print system information
    --bannedports               Ports banned separated by comma(,)
    --maxportallowed            Number of ports opened allowed on this hosts
    --cvefile                   CVE File for vulnerability checks
    --nocolor                   Don't print output in color
    --json                      Print result as JSON string
    --buffers                   Print global and per-thread buffer values
    --outputfile <path>         Path to a output txt file
    --reportfile <path>         Path to a report txt file
    --template   <path>         Path to a template file
    --verbose                   Prints out all options (default: no verbose)
   =head1 PERLDOC

You can find documentation for this module with the perldoc command.

    perldoc mysqltuner

## INTERNALS

[https://github.com/major/MySQLTuner-perl/blob/master/INTERNALS.md](https://github.com/major/MySQLTuner-perl/blob/master/INTERNALS.md)

    Internal documentation

# AUTHORS

Major Hayden - major@mhtx.net

# CONTRIBUTORS

- Matthew Montgomery
- Paul Kehrer
- Dave Burgess
- Jonathan Hinds
- Mike Jackson
- Nils Breunese
- Shawn Ashlee
- Luuk Vosslamber
- Ville Skytta
- Trent Hornibrook
- Jason Gill
- Mark Imbriaco
- Greg Eden
- Aubin Galinotti
- Giovanni Bechis
- Bill Bradford
- Ryan Novosielski
- Michael Scheidell
- Blair Christensen
- Hans du Plooy
- Victor Trac
- Everett Barnes
- Tom Krouper
- Gary Barrueto
- Simon Greenaway
- Adam Stein
- Isart Montane
- Baptiste M.
- Cole Turner
- Major Hayden
- Joe Ashcraft
- Jean-Marie Renouard
- Stephan GroBberndt

# SUPPORT

Bug reports, feature requests, and downloads at http://mysqltuner.com/

Bug tracker can be found at https://github.com/major/MySQLTuner-perl/issues

Maintained by Major Hayden (major\\@mhtx.net) - Licensed under GPL

# SOURCE CODE

[https://github.com/major/MySQLTuner-perl](https://github.com/major/MySQLTuner-perl)

    git clone https://github.com/major/MySQLTuner-perl.git

# COPYRIGHT AND LICENSE

Copyright (C) 2006-2015 Major Hayden - major@mhtx.net

For the latest updates, please visit http://mysqltuner.com/

Git repository available at http://github.com/major/MySQLTuner-perl

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

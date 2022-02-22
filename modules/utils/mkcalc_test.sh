#!/bin/bash
# SYNOPSIS: this is a shell script for making Massive Calculator Modules Tests with flags
# 
# mkcalc_test
#
# Author: mmedina
# Date: Fri 21 Aug 2020 03:09:38 AM PDT
# Last update: 2022-02-22: 07:48
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABLILITY of FITNESS FOR A PARTICULAR PURPOSE. See the 
# GNU General Public License for more details.
#
# You Should have recieved a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#ARGS::  -t test -a

#______________________________________________________________________________________________
# Functions

outfile=${outfile:-made.php}
in_outfile=$( echo $outfile | sed -e 's/.php//')
function pmessage() {
    for phrase in "$@"
    do
        echo 
        echo "    $phrase"
    done
}

function all(){
    echo "Enter Description: "
    read -r myDescription
    cat <<EOF > $outfile
<?php
# SYNOPSIS: $myDescription
# 
# $outfile
#
# Author: $user
# Date: $(date)
# Last update: $(date)
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABLILITY of FITNESS FOR A PARTICULAR PURPOSE. See the 
# GNU General Public License for more details.
#
# You Should have recieved a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1]](<{}>) !== array(<{}>, "<{}>")){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_pass(\$class->function_strings[1]);
        \$pass++;
    }


    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{}>, $(echo $outfile | sed 's/.php//')(\$test, \$<{}>));

EOF
}

function license(){
    cat <<EOF > $outfile
<?php
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABLILITY of FITNESS FOR A PARTICULAR PURPOSE. See the 
# GNU General Public License for more details.
#
# You Should have recieved a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed -e 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1](<{param}>) !== array(<{formulas}>, "<{unit string}>"){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_fail(\$class->function_strings[1]);
        \$pass++;
    }





    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{module name}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{mod name}>, $(echo $outfile | sed -e 's/.php//')(\$test, \$<{mod name}>));

EOF
}

function author(){
    cat <<EOF > $outfile
<?php
#
# Author: $user
# Date: $(date)
# Last update: $(date)
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed -e 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1](<{param}>) !== array(<{formulas}>, "<{unit string}>"){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_fail(\$class->function_strings[1]);
        \$pass++;
    }





    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{module name}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{mod name}>, $(echo $outfile | sed -e 's/.php//')(\$test, \$<{mod name}>));
EOF
}

function default(){
    cat <<EOF > $outfile
<?php
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed -e 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1](<{param}>) !== array(<{formulas}>, "<{unit string}>"){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_fail(\$class->function_strings[1]);
        \$pass++;
    }





    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{module name}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{mod name}>, $(echo $outfile | sed -e 's/.php//')(\$test, \$<{mod name}>));
EOF
}

function program(){
    cat <<EOF > $outfile
<?php
#
# $outfile
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed -e 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1](<{param}>) !== array(<{formulas}>, "<{unit string}>"){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_fail(\$class->function_strings[1]);
        \$pass++;
    }





    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{module name}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{mod name}>, $(echo $outfile | sed -e 's/.php//')(\$test, \$<{mod name}>));
EOF
}

function syn(){
    echo "Enter Description: "
    read -r myDescription
    cat <<EOF > $outfile
<?php
# SYNOPSIS: $myDescription
#
# $outfile
#

require_once("pass_fail.php");
require_once("imports.inc.php");

\$test = new TestSuite();

function $(echo $outfile | sed 's/.php//')(\$test, \$class){

    \$pass = 0;
    \$fail = 0;
    if ( \$class->function_list[\$class->function_strings[1](<{}>)] !== array(<{}>, "<{}>")){
        \$test->set_fail(\$class->funciton_strings[1]);
        \$fail++;
    } else {
        \$test->set_fail(\$class->function_strings[1]);
        \$pass++;
    }





    echo "\nTested: ".count(\$class->function_list);
    echo "\nPassed: ".\$pass;
    echo "\nFailed: ".\$fail;
}
echo "<{module name}>
------------------------------------------\n";
sleep(1);
\$test->pass_fail(\$<{}>, $(echo $outfile | sed 's/.php//')(\$test, \$<{}>));
EOF
}


function help(){
    printf "Usage: %s: 
            -t <filename>   sets filename to create
            [-a] run all documentation features
            [-A] Create Author Block 
            [-l] Create License Block 
            [-e] Edit in Your set Editor after create
            [-d] Create standalone bash shebang line
            [-p] Add filename to documentation block
            [-s] Synopsis Line with program name    

            All Options have the shebang line"
    echo
    echo "Syntax Format: mkpy -t <filename> -[flags]"
    exit
}

#______________________________________________________________________________________________
# Initialization

while getopts "ahAledpt:u:" opt $OPTIONS;
do
    case $opt in
        t) outfile="${OPTARG%%.php}.php"
            ;;

        a) doall=1
            ;;

        l) dolicense=1
            ;;

        A) doauthor=1
            ;;
            
        h) help
            ;;

        e) doeditor=1
            ;;

        d) dodefault=1
            ;;

        p) doprogram=1
            ;;

        u) user=$OPTARG
            ;;

        *) echo "Invalid argument exiting..."
            exit
            ;;
    esac
done

if [[ -z $user ]]; then
    u=$(whoami)
    user=$(grep $u /etc/passwd | cut -d':' -f5)
fi

if [[ -f $outfile ]]; then
    pmessage " The File $outfile exists. Rename it or delete it" \
    " or press 'f' to overwrite it or 'Return' to exit: "
    read ans
    if [[ "$ans" != "f" ]]; then
        exit;
    fi
fi

if [[ ! -z "$doall" ]]; then
    all
    pmessage " Created $outfile" " Now opening $outfile..."
    sleep 1
    $EDITOR $outfile
fi
if [[ ! -z "$dolicense" ]]; then
    license
    pmessage " Created $outfile with license block"
fi
if [[ ! -z "$doauthor" ]]; then
    author
    pmessage " Created $outfile with Author block"
fi
if [[ ! -z "$doeditor" ]]; then
    pmessage " Now opening $outfile..."
    sleep 1
    $EDITOR $outfile
fi
if [[ ! -z "$dodefault" ]]; then
    pmessage "Created $outfile with shebang line"
    default
fi
if [[ ! -z "$doprogram" ]]; then
    program
    pmessage " Created $outfile with program name"
fi

clear

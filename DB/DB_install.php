<?php
# SYNOPSIS: Deprecated installer endpoint
#
# DB_install.php
#
# Author: Marcus Medina, Codex
# Last Update: 2025-01-21
#

http_response_code(410);
header('Content-Type: text/plain; charset=UTF-8');
echo "This installer endpoint is deprecated. Use /admin/ with the new installer.\n";

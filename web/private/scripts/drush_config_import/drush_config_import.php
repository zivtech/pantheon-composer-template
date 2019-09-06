<?php
// Run any db updates
echo "Running any db updates.\n";
passthru('drush updb -y');
// Import all config changes.
echo "Importing (partial) configuration from yml files...\n";
passthru('drush config-import --partial -y');
echo "Import of configuration complete.\n";
// Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";

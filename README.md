# Pantheon Composer Template

A repository template for new Drupal 8 Pantheon sites based on the https://github.com/pantheon-systems/example-drops-8-composer repository.

## Notable Changes
Below you can find the notable changes between our repository and the pantheon example-drops-8-composer repo.

- The .gitignore file is modified to allow scaffolding, vendor, core, and all other composer managed files.
- The .gitignore file is modified to ignore composer dev dependencies.
- Removed Circle.CI, GitLab, and Bitbucket functionality, as we typically use GitHub with Jenkins.
- Removed drupal console. We use drush.
- Added some commonly used contrib modules.
- Added Environment Indicator settings for local, DDEV, and Pantheon environments.

## How to Use

1. Create a new GitHub repo for the project site using this repository as a template.
2. Ensure you have a [Pantheon Machine Token](https://dashboard.pantheon.io/users/#account/tokens/).
3. Login to Pantheon using Terminus and your machine token in your Terminal.

    terminus auth:login --machine-token YOUR_MACHINE_TOKEN

4. Create a new empty Pantheon site using Terminus. Replace `ORG_NAME` with your Pantheon organization name. Example: `zivtech`

    terminus site:create SITENAME LABEL empty --org=ORG_NAME --no-interaction

5. Goto the new Pantheon site page once the Terminus command reports `[notice] Deployed CMS`.

3. Git add the Pantheon remote repo URL to the GitHub repo you cloned. Replace `PANTHEON_GIT_REPO` with Pantheon repo connection info from the Pantheon site page.

    git remote add pantheon PANTHEON_GIT_REPO

4. Git pull the Pantheon remote with `--allow-unrelated-histories` and fix any merge conflicts.

    git pull pantheon master --allow-unrelated-histories

4. Git force push to the Github remote master branch.

    git push --force

5. Git force push to the `pantheon master` remote branch.

    git push --force pantheon master

6. Setup pantheon Dev site.

# Pantheon Composer Template
A repository template for new Drupal 8 Pantheon sites based on the https://github.com/pantheon-systems/example-drops-8-composer repository.

## Starterlight Theme
Our front-end developer team has put together a Drupal 8 starter theme called [Starterlight](https://github.com/zivtech/starterlight) to use for new Drupal 8 theming projects. See the [Starterlight](https://github.com/zivtech/starterlight) project page on GitHub for documentation.

## Probo Integration
This repository is ready to be integrated with Probo.CI to install a fresh copy of Drupal 8. Additional configuration to the .probo.yaml file is required to manage configuration imports after the site has been installed.

## Notable Changes
Below you can find the notable changes between our repository and the Pantheon [example-drops-8-composer](https://github.com/pantheon-systems/example-drops-8-composer) repo.

- The .gitignore file is modified to allow scaffolding, vendor, core, and all other composer managed files.
- The .gitignore file is modified to ignore composer dev dependencies.
- Removed Circle.CI, GitLab, and Bitbucket functionality, as we typically use GitHub with Jenkins.
- Removed drupal console. We use drush.
- Added some commonly used contrib modules.
- Added [Environment Indicator](https://www.drupal.org/project/environment_indicator) module settings for local, DDEV, and Pantheon environments.
- Added [composer-manifest](https://github.com/joachim-n/composer-manifest) Composer plugin to track all installed package and dependency versions.

## How to Use This Template
Below you can find step by step documentation for creating a new Drupal 8 project repository controlled by Composer that lives on GitHub and is hosted on Pantheon.

1. Create a new GitHub repo for the project site using this repository as a template.
2. Ensure you have a [Pantheon Machine Token](https://dashboard.pantheon.io/users/#account/tokens/).
3. Login to Pantheon using Terminus and your machine token in your Terminal.

       terminus auth:login --machine-token YOUR_MACHINE_TOKEN

4. Create a new empty Pantheon site using Terminus. Replace `ORG_NAME` with your Pantheon organization name. Example: `zivtech`

       terminus site:create SITENAME LABEL empty --org=ORG_NAME --no-interaction

5. Goto the new Pantheon site page once the Terminus command reports `[notice] Deployed CMS`.

6. Git add the Pantheon remote repo URL to the GitHub repo you cloned. Replace `PANTHEON_GIT_REPO` with Pantheon repo connection info from the Pantheon site page.

       git remote add pantheon PANTHEON_GIT_REPO

7. Git pull the Pantheon remote with `--allow-unrelated-histories` and fix any merge conflicts.

       git pull pantheon master --allow-unrelated-histories

8. Git force push to the Github remote master branch.

       git push --force

9. Git force push to the `pantheon master` remote branch.

       git push --force pantheon master

10. Set the Pantheon site Development Mode to SFTP to install the Drupal 8 site or import an existing database through the Pantheon Database/Files tab.
11. Click the Visit Development Site button to either install the Drupal 8 site or verify the DB import was successful.
12. Upload a tarball or zip archive of the files dir through the Pantheon UI or set the site to SFTP Development Mode and upload the contents of the files directory using the SFTP Connection Info available for the site.

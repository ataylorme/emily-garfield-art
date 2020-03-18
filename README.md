# emily-garfield-art

[![CircleCI](https://circleci.com/gh/kadamwhite/emily-garfield-art.svg?style=shield)](https://circleci.com/gh/kadamwhite/emily-garfield-art)
[![Dashboard emily-garfield-art](https://img.shields.io/badge/dashboard-emily_garfield_art-yellow.svg)](https://dashboard.pantheon.io/sites/111cdb34-e62f-4a44-a18d-4ee451984bdf#dev/code)
[![Dev Site emily-garfield-art](https://img.shields.io/badge/site-emily_garfield_art-blue.svg)](http://dev-emily-garfield-art.pantheonsite.io/)

## Deploy process

After a commit to master is pushed or (preferably) a pull request is merged, a build will be started in Circle CI. Several steps will be run, starting with code sniffs and concluding with a build_and_deploy step which sends files out to the Pantheon development site.

Once the build has concluded, you should see your commit and a subsequent "Build assets for dev" commit in the commit log for the Dev site within the Pantheon dashboard. After Dev has been updated by the build process you may use the Pantheon dashboard to deploy the changes to the test environment; pull down the latest live environment database to ensure code updates do not invalidate published content.

If the Test site looks good, you may deploy to Live!

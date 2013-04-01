api = 2
core = 7.x

projects[dumpling][type] = module
projects[dumpling][version] = 1.x-dev
projects[dumpling][download][type] = git
projects[dumpling][download][revision] = 59dc2a9
projects[dumpling][subdir] = contrib

projects[fences][version] = 1.0
projects[fences][subdir] = contrib

; ★ ★ ★  NodeStream Core
projects[ns_core][version] = 2.0-rc4
projects[ns_core][subdir] = contrib


; Patches

; ==> NodeStream Core + CKEditor 4
projects[ns_core][patch][1904548] = http://drupal.org/files/ns-core-update-ckeditor-1904548-7.patch

; http://drupal.org/node/1949134
projects[ns_core][patch][1949134] = http://drupal.org/files/ns-core-security-update-views-1949134-1.patch

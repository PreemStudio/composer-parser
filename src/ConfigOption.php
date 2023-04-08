<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser;

enum ConfigOption: string
{
    case ALLOW_PLUGINS = 'allow-plugins';

    case APCU_AUTOLOADER = 'apcu-autoloader';

    case ARCHIVE_DIR = 'archive-dir';

    case ARCHIVE_FORMAT = 'archive-format';

    case AUTOLOADER_SUFFIX = 'autoloader-suffix';

    case BEARER = 'bearer';

    case BIN_COMPAT = 'bin-compat';

    case BIN_DIR = 'bin-dir';

    case BITBUCKET_OAUTH = 'bitbucket-oauth';

    case CACHE_DIR = 'cache-dir';

    case CACHE_FILES_DIR = 'cache-files-dir';

    case CACHE_FILES_MAXSIZE = 'cache-files-maxsize';

    case CACHE_FILES_TTL = 'cache-files-ttl';

    case CACHE_READ_ONLY = 'cache-read-only';

    case CACHE_REPO_DIR = 'cache-repo-dir';

    case CACHE_VCS_DIR = 'cache-vcs-dir';

    case CAFILE = 'cafile';

    case CAPATH = 'capath';

    case CLASSMAP_AUTHORITATIVE = 'classmap-authoritative';

    case DATA_DIR = 'data-dir';

    case DISABLE_TLS = 'disable-tls';

    case DISCARD_CHANGES = 'discard-changes';

    case GITHUB_DOMAINS = 'github-domains';

    case GITHUB_EXPOSE_HOSTNAME = 'github-expose-hostname';

    case GITHUB_OAUTH = 'github-oauth';

    case GITHUB_PROTOCOLS = 'github-protocols';

    case GITLAB_DOMAINS = 'gitlab-domains';

    case GITLAB_OAUTH = 'gitlab-oauth';

    case GITLAB_PROTOCOL = 'gitlab-protocol';

    case GITLAB_TOKEN = 'gitlab-token';

    case HTACCESS_PROTECT = 'htaccess-protect';

    case HTTP_BASIC = 'http-basic';

    case LOCK = 'lock';

    case NOTIFY_ON_INSTALL = 'notify-on-install';

    case OPTIMIZE_AUTOLOADER = 'optimize-autoloader';

    case PLATFORM = 'platform';

    case PLATFORM_CHECK = 'platform-check';

    case PREFERRED_INSTALL = 'preferred-install';

    case PREPEND_AUTOLOADER = 'prepend-autoloader';

    case PROCESS_TIMEOUT = 'process-timeout';

    case SECURE_HTTP = 'secure-http';

    case SECURE_SVN_DOMAINS = 'secure-svn-domains';

    case SORT_PACKAGES = 'sort-packages';

    case STORE_AUTHS = 'store-auths';

    case USE_GITHUB_API = 'use-github-api';

    case USE_INCLUDE_PATH = 'use-include-path';

    case USE_PARENT_DIR = 'use-parent-dir';

    case VENDOR_DIR = 'vendor-dir';
}

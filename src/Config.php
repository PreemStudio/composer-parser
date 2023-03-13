<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser;

use PreemStudio\ComposerParser\Mappers\KebabCaseMapper;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/06-config.md */
#[MapInputName(KebabCaseMapper::class)]
final class Config extends Data
{
    /** @see https://getcomposer.org/doc/06-config.md#allow-plugins */
    public ?array $allowPlugins;

    /** @see https://getcomposer.org/doc/06-config.md#use-include-path */
    public ?bool $useIncludePath;

    /** @see https://getcomposer.org/doc/06-config.md#preferred-install */
    public ?array $preferredInstall;

    /** @see https://getcomposer.org/doc/06-config.md#use-parent-dir */
    public mixed $useParentDir;

    /** @see https://getcomposer.org/doc/06-config.md#store-auths */
    public mixed $storeAuths;

    /** @see https://getcomposer.org/doc/06-config.md#github-protocols */
    public ?array $githubProtocols;

    /** @see https://getcomposer.org/doc/06-config.md#github-oauth */
    public ?array $githubOauth;

    /** @see https://getcomposer.org/doc/06-config.md#gitlab-domains */
    public ?array $gitlabDomains;

    /** @see https://getcomposer.org/doc/06-config.md#gitlab-oauth */
    public ?array $gitlabOauth;

    /** @see https://getcomposer.org/doc/06-config.md#gitlab-token */
    public ?array $gitlabToken;

    /** @see https://getcomposer.org/doc/06-config.md#gitlab-protocol */
    public ?array $gitlabProtocol;

    /** @see https://getcomposer.org/doc/06-config.md#disable-tls */
    public ?bool $disableTls;

    /** @see https://getcomposer.org/doc/06-config.md#secure-http */
    public ?bool $secureHttp;

    /** @see https://getcomposer.org/doc/06-config.md#bitbucket-oauth */
    public ?array $bitbucketOauth;

    /** @see https://getcomposer.org/doc/06-config.md#cafile */
    public ?string $cafile;

    /** @see https://getcomposer.org/doc/06-config.md#capath */
    public ?string $capath;

    /** @see https://getcomposer.org/doc/06-config.md#http-basic */
    public ?array $httpBasic;

    /** @see https://getcomposer.org/doc/06-config.md#bearer */
    public ?string $bearer;

    /** @see https://getcomposer.org/doc/06-config.md#platform */
    public ?string $platform;

    /** @see https://getcomposer.org/doc/06-config.md#vendor-dir */
    public ?string $vendorDir;

    /** @see https://getcomposer.org/doc/06-config.md#bin-dir */
    public ?string $binDir;

    /** @see https://getcomposer.org/doc/06-config.md#data-dir */
    public ?string $dataDir;

    /** @see https://getcomposer.org/doc/06-config.md#cache-dir */
    public ?string $cacheDir;

    /** @see https://getcomposer.org/doc/06-config.md#cache-files-dir */
    public ?string $cacheFilesDir;

    /** @see https://getcomposer.org/doc/06-config.md#cache-repo-dir */
    public ?string $cacheRepoDir;

    /** @see https://getcomposer.org/doc/06-config.md#cache-vcs-dir */
    public ?string $cacheVcsDir;

    /** @see https://getcomposer.org/doc/06-config.md#cache-files-ttl */
    public ?int $cacheFilesTtl;

    /** @see https://getcomposer.org/doc/06-config.md#cache-files-maxsize */
    public ?string $cacheFilesMaxsize;

    /** @see https://getcomposer.org/doc/06-config.md#cache-read-only */
    public ?bool $cacheReadOnly;

    /** @see https://getcomposer.org/doc/06-config.md#bin-compat */
    public ?string $binCompat;

    /** @see https://getcomposer.org/doc/06-config.md#prepend-autoloader */
    public ?bool $prependAutoloader;

    /** @see https://getcomposer.org/doc/06-config.md#autoloader-suffix */
    public ?string $autoloaderSuffix;

    /** @see https://getcomposer.org/doc/06-config.md#optimize-autoloader */
    public ?bool $optimizeAutoloader;

    /** @see https://getcomposer.org/doc/06-config.md#sort-packages */
    public ?bool $sortPackages;

    /** @see https://getcomposer.org/doc/06-config.md#classmap-authoritative */
    public ?bool $classmapAuthoritative;

    /** @see https://getcomposer.org/doc/06-config.md#apcu-autoloader */
    public ?bool $apcuAutoloader;

    /** @see https://getcomposer.org/doc/06-config.md#github-domains */
    public ?array $githubDomains;

    /** @see https://getcomposer.org/doc/06-config.md#github-expose-hostname */
    public ?bool $githubExposeHostname;

    /** @see https://getcomposer.org/doc/06-config.md#use-github-api */
    public ?bool $useGithubApi;

    /** @see https://getcomposer.org/doc/06-config.md#notify-on-install */
    public ?bool $notifyOnInstall;

    /** @see https://getcomposer.org/doc/06-config.md#discard-changes */
    public ?bool $discardChanges;

    /** @see https://getcomposer.org/doc/06-config.md#archive-format */
    public ?string $archiveFormat;

    /** @see https://getcomposer.org/doc/06-config.md#archive-dir */
    public ?string $archiveDir;

    /** @see https://getcomposer.org/doc/06-config.md#htaccess-protect */
    public ?bool $htaccessProtect;

    /** @see https://getcomposer.org/doc/06-config.md#lock */
    public ?bool $lock;

    /** @see https://getcomposer.org/doc/06-config.md#platform-check */
    public ?bool $platformCheck;

    /** @see https://getcomposer.org/doc/06-config.md#secure-svn-domains */
    public ?array $secureSvnDomains;
}

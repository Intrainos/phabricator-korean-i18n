<?php

/**
 * Phabricator(libphutill) Korean Locale File
 * Put on libphutill/src/internationalization/locale
 */
final class PhutilKoreanLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  public function getLocaleName() {
    return pht('한국어 (대한민국)');
  }

  public function getFallbackLocaleCode() {
    return 'en_US';
  }

  public function isSillyLocale() {
    return false;
  }

  public function isTestLocale() {
    return false;
  }
}

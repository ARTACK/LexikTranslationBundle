<?php

namespace Lexik\Bundle\TranslationBundle\Manager;

use Lexik\Bundle\TranslationBundle\Model\TransUnit;
use Lexik\Bundle\TranslationBundle\Model\Translation;
use Lexik\Bundle\TranslationBundle\Model\File;

/**
 * TransUnit manager interface.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
interface TransUnitManagerInterface
{
    /**
     * Returns a new TransUnit instance with new translations for each $locales.
     *
     * @param array $locales
     * @return TransUnit
     */
    public function newInstance($locales = array());

    /**
     * Create a new trans unit.
     *
     * @param string  $keyName
     * @param string  $domainName
     * @param boolean $flush
     * @return TransUnit
     */
    public function create($keyName, $domainName, $flush = false);

    /**
     * Returns a TransUnit by its key and domain.
     *
     * @param string $key
     * @param string $domainName
     * @return TransUnit
     */
    public function findOneByKeyAndDomain($key, $domain);

    /**
     * Add a new translation to the given trans unit.
     *
     * @param TransUnit $transUnit
     * @param string    $locale
     * @param string    $content
     * @param File      $file
     * @param boolean   $flush
     * @return Translation
     */
    public function addTranslation(TransUnit $transUnit, $locale, $content, File $file = null, $flush = false);

    /**
     * Update the translated content of a trans unit for the given locale.
     *
     * @param TransUnit $transUnit
     * @param string    $locale
     * @param string    $content
     * @param boolean   $flush
     * @return Translation
     */
    public function updateTranslation(TransUnit $transUnit, $locale, $content, $flush = false);

    /**
     * Update the content of each translations for the given trans unit.
     *
     * @param TransUnit $transUnit
     * @param array     $translations
     * @param boolean   $flush
     */
    public function updateTranslationsContent(TransUnit $transUnit, array $translations, $flush = false);
}

<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon;

/**
 * A factory to generate Carbon instances with common settings.
 *
 * <autodoc generated by `composer phpdoc`>
 *
 * @method Carbon create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null)                       Create a new Carbon instance from a specific date and time.
 *                                                                                                                               If any of $year, $month or $day are set to null their now() values will
 *                                                                                                                               be used.
 *                                                                                                                               If $hour is null it will be set to its now() value and the default
 *                                                                                                                               values for $minute and $second will be their now() values.
 *                                                                                                                               If $hour is not null then the default values for $minute and $second
 *                                                                                                                               will be 0.
 * @method Carbon createFromDate($year = null, $month = null, $day = null, $tz = null)                                           Create a Carbon instance from just a date. The time portion is set to now.
 * @method Carbon createFromFormat($format, $time, $tz = null)                                                                   Create a Carbon instance from a specific format.
 * @method Carbon createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)                                                Create a Carbon instance from just a time. The date portion is set to today.
 * @method Carbon createFromTimeString($time, $tz = null)                                                                        Create a Carbon instance from a time string. The date portion is set to today.
 * @method Carbon createFromTimestamp($timestamp, $tz = null)                                                                    Create a Carbon instance from a timestamp.
 * @method Carbon createFromTimestampMs($timestamp, $tz = null)                                                                  Create a Carbon instance from a timestamp in milliseconds.
 * @method Carbon createFromTimestampUTC($timestamp)                                                                             Create a Carbon instance from an UTC timestamp.
 * @method Carbon createMidnightDate($year = null, $month = null, $day = null, $tz = null)                                       Create a Carbon instance from just a date. The time portion is set to midnight.
 * @method Carbon createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null) Create a new safe Carbon instance from a specific date and time.
 *                                                                                                                               If any of $year, $month or $day are set to null their now() values will
 *                                                                                                                               be used.
 *                                                                                                                               If $hour is null it will be set to its now() value and the default
 *                                                                                                                               values for $minute and $second will be their now() values.
 *                                                                                                                               If $hour is not null then the default values for $minute and $second
 *                                                                                                                               will be 0.
 *                                                                                                                               If one of the set values is not valid, an \InvalidArgumentException
 *                                                                                                                               will be thrown.
 * @method Carbon disableHumanDiffOption($humanDiffOption)                                                                       @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 * @method Carbon enableHumanDiffOption($humanDiffOption)                                                                        @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 * @method Carbon executeWithLocale($locale, $func)                                                                              Set the current locale to the given, execute the passed function, reset the locale to previous one,
 *                                                                                                                               then return the result of the closure (or null if the closure was void).
 * @method Carbon fromSerialized($value)                                                                                         Create an instance from a serialized string.
 * @method Carbon getAvailableLocales()                                                                                          Returns the list of internally available locales and already loaded custom locales.
 *                                                                                                                               (It will ignore custom translator dynamic loading.)
 * @method Carbon getDays()                                                                                                      Get the days of the week
 * @method Carbon getHumanDiffOptions()                                                                                          @return int
 * @method Carbon getIsoUnits()                                                                                                  Returns list of locale units for ISO formatting.
 * @method Carbon getLastErrors()                                                                                                {@inheritdoc}
 * @method Carbon getLocale()                                                                                                    Get the current translator locale.
 * @method Carbon getMidDayAt()                                                                                                  get midday/noon hour
 * @method Carbon getTestNow()                                                                                                   Get the Carbon instance (real or mock) to be returned when a "now"
 *                                                                                                                               instance is created.
 * @method Carbon getTranslator()                                                                                                Get the default translator instance in use.
 * @method Carbon getWeekEndsAt()                                                                                                Get the last day of week
 * @method Carbon getWeekStartsAt()                                                                                              Get the first day of week
 * @method Carbon getWeekendDays()                                                                                               Get weekend days
 * @method Carbon hasFormat($date, $format)                                                                                      Checks if the (date)time string is in a given format.
 * @method Carbon hasMacro($name)                                                                                                Checks if macro is registered.
 * @method Carbon hasRelativeKeywords($time)                                                                                     Determine if a time string will produce a relative date.
 * @method Carbon hasTestNow()                                                                                                   Determine if there is a valid test instance set. A valid test instance
 *                                                                                                                               is anything that is not null.
 * @method Carbon instance($date)                                                                                                Create a Carbon instance from a DateTime one.
 * @method Carbon isImmutable()                                                                                                  Returns true if the current class/instance is immutable.
 * @method Carbon isModifiableUnit($unit)                                                                                        Returns true if a property can be changed via setter.
 * @method Carbon isMutable()
 * @method Carbon isStrictModeEnabled()                                                                                          Returns true if the strict mode is globally in use, false else.
 *                                                                                                                               (It can be overridden in specific instances.)
 * @method Carbon localeHasDiffOneDayWords($locale)                                                                              Returns true if the given locale is internally supported and has words for 1-day diff (just now, yesterday, tomorrow).
 *                                                                                                                               Support is considered enabled if the 3 words are translated in the given locale.
 * @method Carbon localeHasDiffSyntax($locale)                                                                                   Returns true if the given locale is internally supported and has diff syntax support (ago, from now, before, after).
 *                                                                                                                               Support is considered enabled if the 4 sentences are translated in the given locale.
 * @method Carbon localeHasDiffTwoDayWords($locale)                                                                              Returns true if the given locale is internally supported and has words for 2-days diff (before yesterday, after tomorrow).
 *                                                                                                                               Support is considered enabled if the 2 words are translated in the given locale.
 * @method Carbon localeHasPeriodSyntax($locale)                                                                                 Returns true if the given locale is internally supported and has period syntax support (X times, every X, from X, to X).
 *                                                                                                                               Support is considered enabled if the 4 sentences are translated in the given locale.
 * @method Carbon localeHasShortUnits($locale)                                                                                   Returns true if the given locale is internally supported and has short-units support.
 *                                                                                                                               Support is considered enabled if either year, day or hour has a short variant translated.
 * @method Carbon macro($name, $macro)                                                                                           Register a custom macro.
 * @method Carbon make($var)                                                                                                     Make a Carbon instance from given variable if possible.
 *                                                                                                                               Always return a new instance. Parse only strings and only these likely to be dates (skip intervals
 *                                                                                                                               and recurrences). Throw an exception for invalid format, but otherwise return null.
 * @method Carbon maxValue()                                                                                                     Create a Carbon instance for the greatest supported date.
 * @method Carbon minValue()                                                                                                     Create a Carbon instance for the lowest supported date.
 * @method Carbon mixin($mixin)                                                                                                  Mix another object into the class.
 * @method Carbon now($tz = null)                                                                                                Get a Carbon instance for the current date and time.
 * @method Carbon parse($time = null, $tz = null)                                                                                Create a carbon instance from a string.
 *                                                                                                                               This is an alias for the constructor that allows better fluent syntax
 *                                                                                                                               as it allows you to do Carbon::parse('Monday next week')->fn() rather
 *                                                                                                                               than (new Carbon('Monday next week'))->fn().
 * @method string pluralUnit(string $unit)                                                                                       Returns standardized plural of a given singular/plural unit name (in English).
 * @method Carbon resetMonthsOverflow()                                                                                          @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 *                                                                                                                                           Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *                                                                                                                                           are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @method Carbon resetToStringFormat()                                                                                          Reset the format used to the default when type juggling a Carbon instance to a string
 * @method Carbon resetYearsOverflow()                                                                                           @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 *                                                                                                                                           Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *                                                                                                                                           are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @method Carbon serializeUsing($callback)                                                                                      @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather transform Carbon object before the serialization.
 *                                                                                                                               JSON serialize all Carbon instances using the given callback.
 * @method Carbon setHumanDiffOptions($humanDiffOptions)                                                                         @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 * @method Carbon setLocale($locale)                                                                                             Set the current translator locale and indicate if the source locale file exists.
 *                                                                                                                               Pass 'auto' as locale to use closest language from the current LC_TIME locale.
 * @method Carbon setMidDayAt($hour)                                                                                             @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather consider mid-day is always 12pm, then if you need to test if it's an other
 *                                                                                                                                           hour, test it explicitly:
 *                                                                                                                                               $date->format('G') == 13
 *                                                                                                                                           or to set explicitly to a given hour:
 *                                                                                                                                               $date->setTime(13, 0, 0, 0)
 *                                                                                                                               Set midday/noon hour
 * @method Carbon setTestNow($testNow = null)                                                                                    Set a Carbon instance (real or mock) to be returned when a "now"
 *                                                                                                                               instance is created.  The provided instance will be returned
 *                                                                                                                               specifically under the following conditions:
 *                                                                                                                                 - A call to the static now() method, ex. Carbon::now()
 *                                                                                                                                 - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
 *                                                                                                                                 - When the string "now" is passed to the constructor or parse(), ex. new Carbon('now')
 *                                                                                                                                 - When a string containing the desired time is passed to Carbon::parse().
 *                                                                                                                               Note the timezone parameter was left out of the examples above and
 *                                                                                                                               has no affect as the mock value will be returned regardless of its value.
 *                                                                                                                               To clear the test instance call this method using the default
 *                                                                                                                               parameter of null.
 *                                                                                                                               /!\ Use this method for unit tests only.
 * @method Carbon setToStringFormat($format)                                                                                     @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather let Carbon object being casted to string with DEFAULT_TO_STRING_FORMAT, and
 *                                                                                                                                           use other method or custom format passed to format() method if you need to dump an other string
 *                                                                                                                                           format.
 *                                                                                                                               Set the default format used when type juggling a Carbon instance to a string
 * @method Carbon setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator)                                  Set the default translator instance to use.
 * @method Carbon setUtf8($utf8)                                                                                                 @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use UTF-8 language packages on every machine.
 *                                                                                                                               Set if UTF8 will be used for localized date/time.
 * @method Carbon setWeekEndsAt($day)                                                                                            @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           Use $weekStartsAt optional parameter instead when using startOfWeek, floorWeek, ceilWeek
 *                                                                                                                                           or roundWeek method. You can also use the 'first_day_of_week' locale setting to change the
 *                                                                                                                                           start of week according to current locale selected and implicitly the end of week.
 *                                                                                                                               Set the last day of week
 * @method Carbon setWeekStartsAt($day)                                                                                          @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           Use $weekEndsAt optional parameter instead when using endOfWeek method. You can also use the
 *                                                                                                                                           'first_day_of_week' locale setting to change the start of week according to current locale
 *                                                                                                                                           selected and implicitly the end of week.
 *                                                                                                                               Set the first day of week
 * @method Carbon setWeekendDays($days)                                                                                          @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather consider week-end is always saturday and sunday, and if you have some custom
 *                                                                                                                                           week-end days to handle, give to those days an other name and create a macro for them:
 *                                                                                                                                           ```
 *                                                                                                                                           Carbon::macro('isDayOff', function ($date) {
 *                                                                                                                                               return $date->isSunday() || $date->isMonday();
 *                                                                                                                                           });
 *                                                                                                                                           Carbon::macro('isNotDayOff', function ($date) {
 *                                                                                                                                               return !$date->isDayOff();
 *                                                                                                                                           });
 *                                                                                                                                           if ($someDate->isDayOff()) ...
 *                                                                                                                                           if ($someDate->isNotDayOff()) ...
 *                                                                                                                                           // Add 5 not-off days
 *                                                                                                                                           $count = 5;
 *                                                                                                                                           while ($someDate->isDayOff() || ($count-- > 0)) {
 *                                                                                                                                               $someDate->addDay();
 *                                                                                                                                           }
 *                                                                                                                                           ```
 *                                                                                                                               Set weekend days
 * @method Carbon shouldOverflowMonths()                                                                                         Get the month overflow global behavior (can be overridden in specific instances).
 * @method Carbon shouldOverflowYears()                                                                                          Get the month overflow global behavior (can be overridden in specific instances).
 * @method string singularUnit(string $unit)                                                                                     Returns standardized singular of a given singular/plural unit name (in English).
 * @method Carbon today($tz = null)                                                                                              Create a Carbon instance for today.
 * @method Carbon tomorrow($tz = null)                                                                                           Create a Carbon instance for tomorrow.
 * @method Carbon useMonthsOverflow($monthsOverflow = true)                                                                      @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 *                                                                                                                                           Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *                                                                                                                                           are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @method Carbon useStrictMode($strictModeEnabled = true)                                                                       @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 * @method Carbon useYearsOverflow($yearsOverflow = true)                                                                        @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *                                                                                                                                           You should rather use the ->settings() method.
 *                                                                                                                                           Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *                                                                                                                                           are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @method Carbon yesterday($tz = null)                                                                                          Create a Carbon instance for yesterday.
 *
 * </autodoc>
 */
class Factory
{
    protected $className = Carbon::class;

    protected $settings = [];

    public function __construct(array $settings = [], string $className = null)
    {
        if ($className) {
            $this->className = $className;
        }
        $this->settings = $settings;
    }

    public function getClassName()
    {
        return $this->className;
    }

    public function setClassName(string $className)
    {
        $this->className = $className;

        return $this;
    }

    public function className(string $className = null)
    {
        return $className === null ? $this->getClassName() : $this->setClassName($className);
    }

    public function getSettings()
    {
        return $this->settings;
    }

    public function setSettings(array $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    public function settings(array $settings = null)
    {
        return $settings === null ? $this->getSettings() : $this->setSettings($settings);
    }

    public function mergeSettings(array $settings)
    {
        $this->settings = array_merge($this->settings, $settings);

        return $this;
    }

    public function __call($name, $arguments)
    {
        return $this->className::$name(...$arguments)->settings($this->settings);
    }
}

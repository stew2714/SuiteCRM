<?php

/**
 * Created by PhpStorm.
 * User: ian
 * Date: 18/04/17
 * Time: 09:10
 */
class dateHelper
{

    /**
     *
     * * getPeriodEndDate
     *
     * @param $dateTimePeriodListSelected
     *
     * @return DateTime
     */
    static function getPeriodEndDate($dateTimePeriodListSelected)
    {
        switch ($dateTimePeriodListSelected) {
            case 'today':
                $datetimePeriod = new DateTime();
                break;
            case 'yesterday':
                $datetimePeriod = new DateTime('yesterday');
                break;
            case 'tomorrow':
                $datetimePeriod = new DateTime('tomorrow');
                break;
            case 'this_week':
                $datetimePeriod = new DateTime("this week sunday");
                break;
            case 'last_week':
                $datetimePeriod = new DateTime("last week sunday");
                break;
            case 'next_week':
                $datetimePeriod = new DateTime("next week sunday");
                break;
            case 'this_month':
                $datetimePeriod = new DateTime('last day of this month');
                break;
            case 'last_month':
                $datetimePeriod = new DateTime("last day of last month");
                break;
            case 'next_month':
                $datetimePeriod = new DateTime("last day of next month");
                break;
            case 'this_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // quarter 1
                    $datetimePeriod = new DateTime('last day of march');
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // quarter 2
                    $datetimePeriod = new DateTime('last day of june');
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // quarter 3
                    $datetimePeriod = new DateTime('last day of september');
                } elseif ($thisMonth > 9) {
                    // quarter 4
                    $datetimePeriod = new DateTime('last day of december');
                }
                break;
            case 'last_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // previous quarter 1
                    $datetimePeriod = new DateTime('last year last day of december');
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // previous quarter 2
                    $datetimePeriod = new DateTime('last day of march');
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // previous quarter 3
                    $datetimePeriod = new DateTime('last day of june');
                } elseif ($thisMonth > 9) {
                    // previous quarter 4
                    $datetimePeriod = new DateTime('last day of september');
                }
                break;
            case 'next_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // previous quarter 2
                    $datetimePeriod = new DateTime('last day of march');
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // previous quarter 3
                    $datetimePeriod = new DateTime('last day of june');
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // previous quarter 4
                    $datetimePeriod = new DateTime('last day of september');
                } elseif ($thisMonth > 9) {
                    // previous quarter 1
                    $datetimePeriod = new DateTime('last year last day of december');
                }
                break;
            case 'this_year':
                $datetimePeriod = new DateTime('this year last day of december');
                break;
            case 'last_year':
                $datetimePeriod = new DateTime("last year last day of december");
                break;
            case 'next_year':
                $datetimePeriod = new DateTime("+1 year last day of december");
                break;
        }
        $datetimePeriod->setTime(23, 59, 59);
        return $datetimePeriod;
    }

    /**
     * @param $dateTimePeriodListSelected
     *
     * @return DateTime|static
     */
    static function getPeriodDate($dateTimePeriodListSelected)
    {
        global $sugar_config;
        $dateTimePeriod = new DateTime();

        // Setup when year quarters start & end
        if ($sugar_config['aor']['quarters_begin']) {
            $q = calculateQuarters($sugar_config['aor']['quarters_begin']);
        } else {
            $q = calculateQuarters();
        }

        switch ($dateTimePeriodListSelected) {
            case 'today':
                $dateTimePeriod = new DateTime();
                break;
            case 'yesterday':
                $dateTimePeriod = $dateTimePeriod->sub(new DateInterval("P1D"));
                break;
            case 'tomorrow':
                $dateTimePeriod = $dateTimePeriod->add(new DateInterval("P1D"));
                break;
            case 'this_week':
                $dateTimePeriod = $dateTimePeriod->setTimestamp(strtotime('this week'));
                break;
            case 'last_week':
                $dateTimePeriod = $dateTimePeriod->setTimestamp(strtotime('last week'));
                break;
            case 'next_week':
                $dateTimePeriod = $dateTimePeriod->setTimestamp(strtotime('next week'));
                break;
            case 'this_month':
                $dateTimePeriod = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y'),
                    $dateTimePeriod->format('m'),
                    1
                );
                break;
            case 'last_month':
                $dateTimePeriod = $dateTimePeriod->modify('first day of last month');
                break;
            case 'next_month':
                $dateTimePeriod = $dateTimePeriod->modify('first day of next month');
                break;
            case 'this_quarter':
                $thisMonth = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y'),
                    $dateTimePeriod->format('m'),
                    1
                );
                if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
                    // quarter 1
                    $dateTimePeriod = $dateTimePeriod->setDate(
                        $q[1]['start']->format('Y'),
                        $q[1]['start']->format('m'),
                        $q[1]['start']->format('d')
                    );
                } elseif ($thisMonth >= $q[2]['start'] && $thisMonth <= $q[2]['end']) {
                    // quarter 2
                    $dateTimePeriod = $dateTimePeriod->setDate(
                        $q[2]['start']->format('Y'),
                        $q[2]['start']->format('m'),
                        $q[2]['start']->format('d')
                    );
                } elseif ($thisMonth >= $q[3]['start'] && $thisMonth <= $q[3]['end']) {
                    // quarter 3
                    $dateTimePeriod = $dateTimePeriod->setDate(
                        $q[3]['start']->format('Y'),
                        $q[3]['start']->format('m'),
                        $q[3]['start']->format('d')
                    );
                } elseif ($thisMonth >= $q[4]['start'] && $thisMonth <= $q[4]['end']) {
                    // quarter 4
                    $dateTimePeriod = $dateTimePeriod->setDate(
                        $q[4]['start']->format('Y'),
                        $q[4]['start']->format('m'),
                        $q[4]['start']->format('d')
                    );
                }
                break;
            case 'last_quarter':
                $thisMonth = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y'),
                    $dateTimePeriod->format('m'),
                    1
                );
                if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
                    // quarter 1 - 3 months
                    $dateTimePeriod = $q[1]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[2]['start'] && $thisMonth <= $q[2]['end']) {
                    // quarter 2 - 3 months
                    $dateTimePeriod = $q[2]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[3]['start'] && $thisMonth <= $q[3]['end']) {
                    // quarter 3 - 3 months
                    $dateTimePeriod = $q[3]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[4]['start'] && $thisMonth <= $q[4]['end']) {
                    // quarter 4 - 3 months
                    $dateTimePeriod = $q[3]['start']->sub(new DateInterval('P3M'));
                }
                break;
            case 'next_quarter':
                $thisMonth = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y'),
                    $dateTimePeriod->format('m'),
                    1
                );
                if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
                    // quarter 4 - 3 months
                    $dateTimePeriod = $q[3]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[2]['start'] && $thisMonth <= $q[2]['end']) {
                    // quarter 1 - 3 months
                    $dateTimePeriod = $q[1]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[3]['start'] && $thisMonth <= $q[3]['end']) {
                    // quarter 2 - 3 months
                    $dateTimePeriod = $q[2]['start']->sub(new DateInterval('P3M'));
                } elseif ($thisMonth >= $q[4]['start'] && $thisMonth <= $q[4]['end']) {
                    // quarter 3 - 3 months
                    $dateTimePeriod = $q[3]['start']->sub(
                        new DateInterval('P3M')
                    );
                }
                break;
            case 'this_year':
                $dateTimePeriod = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y'),
                    1,
                    1
                );
                break;
            case 'last_year':
                $dateTimePeriod = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y') - 1,
                    1,
                    1
                );
                break;
            case 'next_year':
                $dateTimePeriod = $dateTimePeriod->setDate(
                    $dateTimePeriod->format('Y') + 1,
                    1,
                    1
                );
                break;
        }
        $dateTimePeriod = $dateTimePeriod->setTime(0, 0, 0);
        return $dateTimePeriod;
    }
}
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
    function getPeriodEndDate($dateTimePeriodListSelected)
    {
        switch ($dateTimePeriodListSelected) {
            case 'today':
            case 'yesterday':
            case 'tomorrow':
                $datetimePeriod = new DateTime();
                break;
            case 'this_week':
                $datetimePeriod = new DateTime("next week monday");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'last_week':
                $datetimePeriod = new DateTime("this week monday");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'next_week':
                $datetimePeriod = new DateTime("next week monday");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'this_month':
                $datetimePeriod = new DateTime('first day of next month');
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'last_month':
                $datetimePeriod = new DateTime("first day of this month");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'next_month':
                $datetimePeriod = new DateTime("last day of next month");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'this_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // quarter 1
                    $datetimePeriod = new DateTime('first day of april');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // quarter 2
                    $datetimePeriod = new DateTime('first day of july');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // quarter 3
                    $datetimePeriod = new DateTime('first day of october');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 9) {
                    // quarter 4
                    $datetimePeriod = new DateTime('next year first day of january');
                    $datetimePeriod->setTime(0, 0, 0);
                }
                break;
            case 'last_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // previous quarter 1
                    $datetimePeriod = new DateTime('this year first day of january');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // previous quarter 2
                    $datetimePeriod = new DateTime('first day of april');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // previous quarter 3
                    $datetimePeriod = new DateTime('first day of july');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 9) {
                    // previous quarter 4
                    $datetimePeriod = new DateTime('first day of october');
                    $datetimePeriod->setTime(0, 0, 0);
                }
                break;
            case 'next_quarter':
                $thisMonth = new DateTime('first day of this month');
                $thisMonth = $thisMonth->format('n');
                if ($thisMonth < 4) {
                    // previous quarter 2
                    $datetimePeriod = new DateTime('first day of april');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 3 && $thisMonth < 7) {
                    // previous quarter 3
                    $datetimePeriod = new DateTime('first day of july');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 6 && $thisMonth < 10) {
                    // previous quarter 4
                    $datetimePeriod = new DateTime('first day of october');
                    $datetimePeriod->setTime(0, 0, 0);
                } elseif ($thisMonth > 9) {
                    // previous quarter 1
                    $datetimePeriod = new DateTime('this year first day of january');
                    $datetimePeriod->setTime(0, 0, 0);
                }
                break;
            case 'this_year':
                $datetimePeriod = new DateTime('next year first day of january');
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'last_year':
                $datetimePeriod = new DateTime("this year first day of january");
                $datetimePeriod->setTime(0, 0, 0);
                break;
            case 'next_year':
                $datetimePeriod = new DateTime("+2 year first day of january");
                $datetimePeriod->setTime(0, 0, 0);
                break;
        }

        return $datetimePeriod;
    }

    /**
     * @param $date_time_period_list_selected
     *
     * @return DateTime|static
     */
    function getPeriodDate($date_time_period_list_selected)
    {
        global $sugar_config;
        $datetime_period = new DateTime();

        // Setup when year quarters start & end
        if ($sugar_config['aor']['quarters_begin']) {
            $q = calculateQuarters($sugar_config['aor']['quarters_begin']);
        } else {
            $q = calculateQuarters();
        }

        if ($date_time_period_list_selected == 'today') {
            $datetime_period = new DateTime();
        } else {
            if ($date_time_period_list_selected == 'yesterday') {
                $datetime_period = $datetime_period->sub(new DateInterval("P1D"));
            } else {
                if ($date_time_period_list_selected == 'tomorrow') {
                    $datetime_period = $datetime_period->sub(new DateInterval("P-1D"));
                } else {
                    if ($date_time_period_list_selected == 'this_week') {
                        $datetime_period = $datetime_period->setTimestamp(strtotime('this week'));
                    } else {
                        if ($date_time_period_list_selected == 'last_week') {
                            $datetime_period = $datetime_period->setTimestamp(strtotime('last week'));
                        } else {
                            if ($date_time_period_list_selected == 'next_week') {
                                $datetime_period = $datetime_period->setTimestamp(strtotime('next week'));
                            } else {
                                if ($date_time_period_list_selected == 'this_month') {
                                    $datetime_period =
                                        $datetime_period->setDate(
                                            $datetime_period->format('Y'),
                                            $datetime_period->format('m'),
                                            1
                                        );
                                } else {
                                    if ($date_time_period_list_selected == 'last_month') {
                                        $datetime_period = $datetime_period->modify('first day of last month');
                                    } else {
                                        if ($date_time_period_list_selected == 'next_month') {
                                            $datetime_period = $datetime_period->modify('first day of next month');
                                        } else {
                                            if ($date_time_period_list_selected == 'this_quarter') {
                                                $thisMonth =
                                                    $datetime_period->setDate(
                                                        $datetime_period->format('Y'),
                                                        $datetime_period->format('m'),
                                                        1
                                                    );
                                                if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
                                                    // quarter 1
                                                    $datetime_period =
                                                        $datetime_period->setDate(
                                                            $q[1]['start']->format('Y'),
                                                            $q[1]['start']->format('m'),
                                                            $q[1]['start']->format('d')
                                                        );
                                                } else {
                                                    if ($thisMonth >= $q[2]['start'] && $thisMonth <= $q[2]['end']) {
                                                        // quarter 2
                                                        $datetime_period =
                                                            $datetime_period->setDate(
                                                                $q[2]['start']->format('Y'),
                                                                $q[2]['start']->format('m'),
                                                                $q[2]['start']->format('d')
                                                            );
                                                    } else {
                                                        if ($thisMonth >= $q[3]['start'] &&
                                                            $thisMonth <= $q[3]['end']
                                                        ) {
                                                            // quarter 3
                                                            $datetime_period =
                                                                $datetime_period->setDate(
                                                                    $q[3]['start']->format('Y'),
                                                                    $q[3]['start']->format('m'),
                                                                    $q[3]['start']->format('d')
                                                                );
                                                        } else {
                                                            if ($thisMonth >= $q[4]['start'] &&
                                                                $thisMonth <= $q[4]['end']
                                                            ) {
                                                                // quarter 4
                                                                $datetime_period =
                                                                    $datetime_period->setDate(
                                                                        $q[4]['start']->format('Y'),
                                                                        $q[4]['start']->format('m'),
                                                                        $q[4]['start']->format('d')
                                                                    );
                                                            }
                                                        }
                                                    }
                                                }
                                            } else {
                                                if ($date_time_period_list_selected == 'last_quarter') {
                                                    $thisMonth =
                                                        $datetime_period->setDate(
                                                            $datetime_period->format('Y'),
                                                            $datetime_period->format('m'),
                                                            1
                                                        );
                                                    if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
                                                        // quarter 1 - 3 months
                                                        $datetime_period = $q[1]['start']->sub(new DateInterval('P3M'));
                                                    } else {
                                                        if ($thisMonth >= $q[2]['start'] &&
                                                            $thisMonth <= $q[2]['end']
                                                        ) {
                                                            // quarter 2 - 3 months
                                                            $datetime_period =
                                                                $q[2]['start']->sub(new DateInterval('P3M'));
                                                        } else {
                                                            if ($thisMonth >= $q[3]['start'] &&
                                                                $thisMonth <= $q[3]['end']
                                                            ) {
                                                                // quarter 3 - 3 months
                                                                $datetime_period =
                                                                    $q[3]['start']->sub(new DateInterval('P3M'));
                                                            } else {
                                                                if ($thisMonth >= $q[4]['start'] &&
                                                                    $thisMonth <= $q[4]['end']
                                                                ) {
                                                                    // quarter 4 - 3 months
                                                                    $datetime_period =
                                                                        $q[3]['start']->sub(new DateInterval('P3M'));
                                                                }
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    if ($date_time_period_list_selected == 'next_quarter') {
                                                        $thisMonth =
                                                            $datetime_period->setDate(
                                                                $datetime_period->format('Y'),
                                                                $datetime_period->format('m'),
                                                                1
                                                            );
                                                        if ($thisMonth >= $q[1]['start'] &&
                                                            $thisMonth <= $q[1]['end']
                                                        ) {
                                                            // quarter 4 - 3 months
                                                            $datetime_period =
                                                                $q[3]['start']->sub(new DateInterval('P3M'));
                                                        } else {
                                                            if ($thisMonth >= $q[2]['start'] &&
                                                                $thisMonth <= $q[2]['end']
                                                            ) {
                                                                // quarter 1 - 3 months
                                                                $datetime_period =
                                                                    $q[1]['start']->sub(new DateInterval('P3M'));
                                                            } else {
                                                                if ($thisMonth >= $q[3]['start'] &&
                                                                    $thisMonth <= $q[3]['end']
                                                                ) {
                                                                    // quarter 2 - 3 months
                                                                    $datetime_period =
                                                                        $q[2]['start']->sub(new DateInterval('P3M'));
                                                                } else {
                                                                    if ($thisMonth >= $q[4]['start'] &&
                                                                        $thisMonth <= $q[4]['end']
                                                                    ) {
                                                                        // quarter 3 - 3 months
                                                                        $datetime_period =
                                                                            $q[3]['start']->sub(
                                                                                new DateInterval('P3M')
                                                                            );
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        if ($date_time_period_list_selected == 'this_year') {
                                                            $datetime_period =
                                                            $datetime_period =
                                                                $datetime_period->setDate(
                                                                    $datetime_period->format('Y'),
                                                                    1,
                                                                    1
                                                                );
                                                        } else {
                                                            if ($date_time_period_list_selected == 'last_year') {
                                                                $datetime_period =
                                                                $datetime_period =
                                                                    $datetime_period->setDate(
                                                                        $datetime_period->format('Y') - 1,
                                                                        1,
                                                                        1
                                                                    );
                                                            } else {
                                                                if ($date_time_period_list_selected == 'next_year') {
                                                                    $datetime_period =
                                                                    $datetime_period =
                                                                        $datetime_period->setDate(
                                                                            $datetime_period->format('Y') + 1,
                                                                            1,
                                                                            1
                                                                        );
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        // set time to 00:00:00
        $datetime_period = $datetime_period->setTime(0, 0, 0);

        return $datetime_period;
    }
}
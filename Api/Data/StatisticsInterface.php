<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistics\Api\Data;

interface StatisticsInterface {

    /**#@+
     * Constants defined for keys of data array. Identical to the name of the getter in snake case
     */
    const ENTITY_ID = 'entity_id';
    const DATE = 'date';
    const NEW_ACTIVE_USERS = 'new_active_users';
    const TOTAL_USERS = 'total_users';
    const BADGES_PER_MINUTE = 'badges_per_minute';
    const TOTAL_BADGES = 'total_badges';
    const TOTAL_VOTES = 'total_votes';
    const TOTAL_COMMENTS = 'total_comments';
    const ANSWERS_PER_MINUTE = 'answers_per_minute';
    const QUESTIONS_PER_MINUTE = 'questions_per_minute';
    const TOTAL_ANSWERS = 'total_answers';
    const TOTAL_ACCEPTED = 'total_accepted';
    const TOTAL_UNANSWERED = 'total_unanswered';
    const TOTAL_QUESTIONS = 'total_questions';
    const ACTIVE = 'active';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getEntityId();

    /**
     * Get date
     *
     * @return string|null
     */
    public function getDate();

    /**
     * Get new active users
     *
     * @return int|null
     */
    public function getNewActiveUsers();

    /**
     * Get total users
     *
     * @return int|null
     */
    public function getTotalUsers();

    /**
     * Get badges per minute
     *
     * @return int|null
     */
    public function getBadgesPerMinute();

    /**
     * Get total badges
     *
     * @return int|null
     */
    public function getTotalBadges();

    /**
     * Get total votes
     *
     * @return int|null
     */
    public function getTotalVotes();

    /**
     * Get total comments
     *
     * @return int|null
     */
    public function getTotalComments();

    /**
     * Get answers per minute
     *
     * @return int|null
     */
    public function getAnswersPerMinute();

    /**
     * Get questions per minute
     *
     * @return int|null
     */
    public function getQuestionsPerMinute();

    /**
     * Get total answers
     *
     * @return int|null
     */
    public function getTotalAnswers();

    /**
     * Get total accepted
     *
     * @return int|null
     */
    public function getTotalAccepted();

    /**
     * Get total unanswered
     *
     * @return int|null
     */
    public function getTotalUnanswered();

    /**
     * Get total questions
     *
     * @return int|null
     */
    public function getTotalQuestions();

    /**
     * Get active
     *
     * @return int|null
     */
    public function getActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setEntityId($id);

    /**
     * Set date
     *
     * @param string $date
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setDate($date);

    /**
     * Set new active users
     *
     * @param int $newActiveUsers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setNewActiveUsers($newActiveUsers);

    /**
     * Set total users
     *
     * @param int $totalUsers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalUsers($totalUsers);

    /**
     * Set badges per minute
     *
     * @param int $badgesPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setBadgesPerMinute($badgesPerMinute);

    /**
     * Set total badges
     *
     * @param int $totalBadges
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalBadges($totalBadges);

    /**
     * Set total comments
     *
     * @param int $totalComments
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalComments($totalComments);

    /**
     * Set answers per minute
     *
     * @param int $answersPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setAnswersPerMinute($answersPerMinute);

    /**
     * Set questions per minute
     *
     * @param int $questionsPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setQuestionsPerMinute($questionsPerMinute);

    /**
     * Set total answers
     *
     * @param int $totalAnswers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalAnswers($totalAnswers);

    /**
     * Set total accepted
     *
     * @param int $totalAccepted
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalAccepted($totalAccepted);

    /**
     * Set total unanswered
     *
     * @param int $totalUnanswered
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalUnanswered($totalUnanswered);

    /**
     * Set total questions
     *
     * @param int $totalQuestions
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalQuestions($totalQuestions);

    /**
     * Set active
     *
     * @param int|bool $active
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setActive($active);
}
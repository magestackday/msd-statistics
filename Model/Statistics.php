<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistics\Model;

use Msd\Statistics\Api\Data\StatisticsInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Statistics extends AbstractModel implements StatisticsInterface, IdentityInterface {

    /**
     * cache tag
     */
    const CACHE_TAG = 'msd_statistics';

    /**
     * @var string
     */
    protected $_cacheTag = 'msd_statistics';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'msd_statistics';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('Msd\Statistics\Model\ResourceModel\Statistics');
    }

    /**
     * Return unique ID(s) for each object in system
     * inherited from IdentityInterface
     *
     * @return array
     */
    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId() {
        return $this->getData(self::ENTITY_ID);
    }

    public function getEntityId() {
        $this->getId();
    }

    /**
     * Get date
     *
     * @return string|null
     */
    public function getDate() {
        return $this->getData(self::DATE);
    }

    /**
     * Get new active users
     *
     * @return int|null
     */
    public function getNewActiveUsers() {
        return $this->getData(self::NEW_ACTIVE_USERS);
    }

    /**
     * Get total users
     *
     * @return int|null
     */
    public function getTotalUsers() {
        return $this->getData(self::TOTAL_USERS);
    }

    /**
     * Get badges per minute
     *
     * @return int|null
     */
    public function getBadgesPerMinute() {
        return $this->getData(self::BADGES_PER_MINUTE);
    }

    /**
     * Get total badges
     *
     * @return int|null
     */
    public function getTotalBadges() {
        return $this->getData(self::TOTAL_BADGES);
    }

    /**
     * Get total votes
     *
     * @return int|null
     */
    public function getTotalVotes() {
        return $this->getData(self::TOTAL_VOTES);
    }

    /**
     * Get total comments
     *
     * @return int|null
     */
    public function getTotalComments() {
        return $this->getData(self::TOTAL_COMMENTS);
    }

    /**
     * Get answers per minute
     *
     * @return int|null
     */
    public function getAnswersPerMinute() {
        return $this->getData(self::ANSWERS_PER_MINUTE);
    }

    /**
     * Get questions per minute
     *
     * @return int|null
     */
    public function getQuestionsPerMinute() {
        return $this->getData(self::QUESTIONS_PER_MINUTE);
    }

    /**
     * Get total answers
     *
     * @return int|null
     */
    public function getTotalAnswers() {
        return $this->getData(self::TOTAL_ANSWERS);
    }

    /**
     * Get total accepted
     *
     * @return int|null
     */
    public function getTotalAccepted() {
        return $this->getData(self::TOTAL_ACCEPTED);
    }

    /**
     * Get total unanswered
     *
     * @return int|null
     */
    public function getTotalUnanswered() {
        return $this->getData(self::TOTAL_UNANSWERED);
    }

    /**
     * Get total questions
     *
     * @return int|null
     */
    public function getTotalQuestions() {
        return $this->getData(self::TOTAL_QUESTIONS);
    }

    /**
     * Get active
     *
     * @return int|null
     */
    public function getActive() {
        return (bool) $this->getData(self::ACTIVE);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setEntityId($id) {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * Set date
     *
     * @param string $date
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setDate($date) {
        return $this->setData(self::DATE, $date);
    }

    /**
     * Set new active users
     *
     * @param int $newActiveUsers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setNewActiveUsers($newActiveUsers) {
        return $this->setData(self::NEW_ACTIVE_USERS, $newActiveUsers);
    }

    /**
     * Set total users
     *
     * @param int $totalUsers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalUsers($totalUsers) {
        return $this->setData(self::TOTAL_USERS, $totalUsers);
    }

    /**
     * Set badges per minute
     *
     * @param int $badgesPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setBadgesPerMinute($badgesPerMinute) {
        return $this->setData(self::BADGES_PER_MINUTE, $badgesPerMinute);
    }

    /**
     * Set total badges
     *
     * @param int $totalBadges
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalBadges($totalBadges) {
        return $this->setData(self::TOTAL_BADGES, $totalBadges);
    }

    /**
     * Set total comments
     *
     * @param int $totalComments
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalComments($totalComments) {
        return $this->setData(self::TOTAL_COMMENTS, $totalComments);
    }

    /**
     * Set answers per minute
     *
     * @param int $answersPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setAnswersPerMinute($answersPerMinute) {
        return $this->setData(self::ANSWERS_PER_MINUTE, $answersPerMinute);
    }

    /**
     * Set questions per minute
     *
     * @param int $questionsPerMinute
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setQuestionsPerMinute($questionsPerMinute) {
        return $this->setData(self::QUESTIONS_PER_MINUTE, $questionsPerMinute);
    }

    /**
     * Set total answers
     *
     * @param int $totalAnswers
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalAnswers($totalAnswers) {
        return $this->setData(self::TOTAL_ANSWERS, $totalAnswers);
    }

    /**
     * Set total accepted
     *
     * @param int $totalAccepted
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalAccepted($totalAccepted) {
        return $this->setData(self::TOTAL_ACCEPTED, $totalAccepted);
    }

    /**
     * Set total unanswered
     *
     * @param int $totalUnanswered
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalUnanswered($totalUnanswered) {
        return $this->setData(self::TOTAL_UNANSWERED, $totalUnanswered);
    }

    /**
     * Set total questions
     *
     * @param int $totalQuestions
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setTotalQuestions($totalQuestions) {
        return $this->setData(self::TOTAL_QUESTIONS, $totalQuestions);
    }

    /**
     * Set active
     *
     * @param int|bool $active
     * @return \Msd\Statistics\Api\Data\StatisticsInterface
     */
    public function setActive($active) {
        return $this->setData(self::ACTIVE, $active);
    }
}

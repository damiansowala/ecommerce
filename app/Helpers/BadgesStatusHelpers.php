<?php

namespace App\Helpers;

class BadgesStatusHelpers
{
    private $badges;
    /** */
    private function getBadgesByConfigKey($configKey)
    {
        $badgesMap = [
            'activeStatuses' => [
                'Active' => 'badge bg-success',
                'Inactive' => 'badge bg-danger'
            ],
            'progressStatuses' => [
                'New' => 'badge bg-primary',
                'In progress' => 'badge bg-warning',
                'Completed' => 'badge bg-success'
            ],
            'paymentStatuses' => [
                'Not paid' => 'badge bg-primary',
                'Pending' => 'badge bg-warning',
                'Paid' => 'badge bg-success'
            ],
            'priorities' => [
                'Low' => 'badge bg-success',
                'Normal' => 'badge bg-primary',
                'Medium' => 'badge bg-warning',
                'High' => 'badge bg-danger'
            ],
            'taskStatuses' => [
                'New' => 'badge bg-primary',
                'Pending' => 'badge bg-info',
                'In progress' => 'badge bg-warning',
                'Completed' => 'badge bg-success'
            ],
            'contractStatuses' => [
                'New' => 'badge bg-primary',
                'Pending approval' => 'badge bg-info',
                'Verification' => 'badge bg-secondary',
                'Negotiation' => 'badge bg-warning',
                'Suspended' => 'badge bg-dark',
                'Active' => 'badge bg-success',
                'Completed' => 'badge bg-light text-dark',
            ],
            'eventStatuses' => [
                'New' => 'badge bg-primary',
                'Planned' => 'badge bg-info',
                'In progress' => 'badge bg-warning',
                'Completed' => 'badge bg-success',
            ],
        ];

        return $badgesMap[$configKey] ?? [];
    }

    public function getAllStatuses($configKey)
    {
        $statuses = config("enums.$configKey", []);
        return $statuses;
    }

    public function isStatusExist($configKey, $status)
    {
        $statuses = $this->getAllStatuses($configKey);
        return in_array($status, $statuses);
    }

    public function getStatusIndex($configKey, $status)
    {
        $statuses = $this->getAllStatuses($configKey);
        $index = array_search($status, $statuses);
        return $index !== false ? $index : null;
    }

    public function getStatusBadge($configKey, $status)
    {
        $statuses = $this->getAllStatuses($configKey);

        if ($this->isStatusExist($configKey, $status)) {
            $badgeClass = $this->getBadgesByConfigKey($configKey)[$status] ?? 'badge bg-secondary';
            return "<span class=\"badge $badgeClass d-block text-center\">$status</span>";
        }

        return "<span class=\"badge bg-secondary d-block text-center\">Unknown: " . $status . "</span>";
    }
}

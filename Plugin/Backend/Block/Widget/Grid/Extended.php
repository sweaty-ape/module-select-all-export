<?php
declare(strict_types = 1);

namespace SweatyApe\SelectAllExport\Plugin\Backend\Block\Widget\Grid;

class Extended
{
    /**
     * @param \Magento\Backend\Block\Widget\Grid\Extended $subject
     * @param $result
     * @return mixed|string
     */
    public function afterGetMainButtonsHtml(
        \Magento\Backend\Block\Widget\Grid\Extended $subject,
        $result
    ) {
        if ($subject->getId() == 'export_filter_grid' && $subject->getFilterVisibility()) {
            $result .= $subject->getChildHtml('select_all_button');
        }

        return $result;
    }
}
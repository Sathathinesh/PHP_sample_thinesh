<?php


class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2021-06-07';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    public function formatJson()
    {
        return json_encode($this->getContents());
    }
}

// Refactored
class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2021-06-07';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}

interface ReportFormattable
{
    public function format(Report $report);
}

class JsonReportFormatter implements ReportFormattable
{
    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }
}

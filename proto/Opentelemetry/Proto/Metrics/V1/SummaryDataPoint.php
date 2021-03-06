<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SummaryDataPoint is a single data point in a timeseries that describes the
 * time-varying values of a Summary metric.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.SummaryDataPoint</code>
 */
class SummaryDataPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of labels that uniquely identify this timeseries.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue labels = 1;</code>
     */
    private $labels;
    /**
     * start_time_unix_nano is the last time when the aggregation value was reset
     * to "zero". For some metric types this is ignored, see data types for more
     * details.
     * The aggregation value is over the time interval (start_time_unix_nano,
     * time_unix_nano].
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     * Value of 0 indicates that the timestamp is unspecified. In that case the
     * timestamp may be decided by the backend.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     */
    private $start_time_unix_nano = 0;
    /**
     * time_unix_nano is the moment when this aggregation value was reported.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     */
    private $time_unix_nano = 0;
    /**
     * count is the number of values in the population. Must be non-negative.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     */
    private $count = 0;
    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 5;</code>
     */
    private $sum = 0.0;
    /**
     * (Optional) list of values at different quantiles of the distribution calculated
     * from the current snapshot. The quantiles must be strictly increasing.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.SummaryDataPoint.ValueAtQuantile quantile_values = 6;</code>
     */
    private $quantile_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Common\V1\StringKeyValue[]|\Google\Protobuf\Internal\RepeatedField $labels
     *           The set of labels that uniquely identify this timeseries.
     *     @type int|string $start_time_unix_nano
     *           start_time_unix_nano is the last time when the aggregation value was reset
     *           to "zero". For some metric types this is ignored, see data types for more
     *           details.
     *           The aggregation value is over the time interval (start_time_unix_nano,
     *           time_unix_nano].
     *           Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     *           1970.
     *           Value of 0 indicates that the timestamp is unspecified. In that case the
     *           timestamp may be decided by the backend.
     *     @type int|string $time_unix_nano
     *           time_unix_nano is the moment when this aggregation value was reported.
     *           Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     *           1970.
     *     @type int|string $count
     *           count is the number of values in the population. Must be non-negative.
     *     @type float $sum
     *           sum of the values in the population. If count is zero then this field
     *           must be zero.
     *     @type \Opentelemetry\Proto\Metrics\V1\SummaryDataPoint\ValueAtQuantile[]|\Google\Protobuf\Internal\RepeatedField $quantile_values
     *           (Optional) list of values at different quantiles of the distribution calculated
     *           from the current snapshot. The quantiles must be strictly increasing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of labels that uniquely identify this timeseries.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue labels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The set of labels that uniquely identify this timeseries.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue labels = 1;</code>
     * @param \Opentelemetry\Proto\Common\V1\StringKeyValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Common\V1\StringKeyValue::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * start_time_unix_nano is the last time when the aggregation value was reset
     * to "zero". For some metric types this is ignored, see data types for more
     * details.
     * The aggregation value is over the time interval (start_time_unix_nano,
     * time_unix_nano].
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     * Value of 0 indicates that the timestamp is unspecified. In that case the
     * timestamp may be decided by the backend.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     * @return int|string
     */
    public function getStartTimeUnixNano()
    {
        return $this->start_time_unix_nano;
    }

    /**
     * start_time_unix_nano is the last time when the aggregation value was reset
     * to "zero". For some metric types this is ignored, see data types for more
     * details.
     * The aggregation value is over the time interval (start_time_unix_nano,
     * time_unix_nano].
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     * Value of 0 indicates that the timestamp is unspecified. In that case the
     * timestamp may be decided by the backend.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time_unix_nano = $var;

        return $this;
    }

    /**
     * time_unix_nano is the moment when this aggregation value was reported.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     * @return int|string
     */
    public function getTimeUnixNano()
    {
        return $this->time_unix_nano;
    }

    /**
     * time_unix_nano is the moment when this aggregation value was reported.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_unix_nano = $var;

        return $this;
    }

    /**
     * count is the number of values in the population. Must be non-negative.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * count is the number of values in the population. Must be non-negative.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 5;</code>
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkDouble($var);
        $this->sum = $var;

        return $this;
    }

    /**
     * (Optional) list of values at different quantiles of the distribution calculated
     * from the current snapshot. The quantiles must be strictly increasing.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.SummaryDataPoint.ValueAtQuantile quantile_values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuantileValues()
    {
        return $this->quantile_values;
    }

    /**
     * (Optional) list of values at different quantiles of the distribution calculated
     * from the current snapshot. The quantiles must be strictly increasing.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.SummaryDataPoint.ValueAtQuantile quantile_values = 6;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\SummaryDataPoint\ValueAtQuantile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuantileValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Metrics\V1\SummaryDataPoint\ValueAtQuantile::class);
        $this->quantile_values = $arr;

        return $this;
    }

}


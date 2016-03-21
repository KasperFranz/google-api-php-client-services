<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "steps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_Toolresults(...);
 *   $steps = $toolresultsService->steps;
 *  </code>
 */
class Google_Service_Toolresults_ProjectsHistoriesExecutionsStepsResource extends Google_Service_Resource
{
  /**
   * Creates a Step.
   *
   * The returned Step will have the id set.
   *
   * May return any of the following canonical error codes:
   *
   * - PERMISSION_DENIED - if the user is not authorized to write to project -
   * INVALID_ARGUMENT - if the request is malformed - FAILED_PRECONDITION - if the
   * step is too large (more than 10Mib) - NOT_FOUND - if the containing Execution
   * does not exist (steps.create)
   *
   * @param string $projectId A Project id.
   *
   * Required.
   * @param string $historyId A History id.
   *
   * Required.
   * @param string $executionId A Execution id.
   *
   * Required.
   * @param Google_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A unique request ID for server to detect
   * duplicated requests. For example, a UUID.
   *
   * Optional, but strongly recommended.
   * @return Google_Service_Step
   */
  public function create($projectId, $historyId, $executionId, Google_Service_Toolresults_Step $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Toolresults_Step");
  }
  /**
   * Gets a Step.
   *
   * May return any of the following canonical error codes:
   *
   * - PERMISSION_DENIED - if the user is not authorized to read project -
   * INVALID_ARGUMENT - if the request is malformed - NOT_FOUND - if the Step does
   * not exist (steps.get)
   *
   * @param string $projectId A Project id.
   *
   * Required.
   * @param string $historyId A History id.
   *
   * Required.
   * @param string $executionId A Execution id.
   *
   * Required.
   * @param string $stepId A Step id.
   *
   * Required.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Step
   */
  public function get($projectId, $historyId, $executionId, $stepId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Toolresults_Step");
  }
  /**
   * Lists Steps for a given Execution.
   *
   * The steps are sorted by creation_time in descending order. The step_id key
   * will be used to order the steps with the same creation_time.
   *
   * May return any of the following canonical error codes:
   *
   * - PERMISSION_DENIED - if the user is not authorized to read project -
   * INVALID_ARGUMENT - if the request is malformed - FAILED_PRECONDITION - if an
   * argument in the request happens to be invalid; e.g. if an attempt is made to
   * list the children of a nonexistent Step - NOT_FOUND - if the containing
   * Execution does not exist (steps.listProjectsHistoriesExecutionsSteps)
   *
   * @param string $projectId A Project id.
   *
   * Required.
   * @param string $historyId A History id.
   *
   * Required.
   * @param string $executionId A Execution id.
   *
   * Required.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of Steps to fetch.
   *
   * Default value: 25. The server will use this default if the field is not set
   * or has a value of 0.
   *
   * Optional.
   * @opt_param string pageToken A continuation token to resume the query at the
   * next item.
   *
   * Optional.
   * @return Google_Service_ListStepsResponse
   */
  public function listProjectsHistoriesExecutionsSteps($projectId, $historyId, $executionId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Toolresults_ListStepsResponse");
  }
  /**
   * Updates an existing Step with the supplied partial entity.
   *
   * May return any of the following canonical error codes:
   *
   * - PERMISSION_DENIED - if the user is not authorized to write project -
   * INVALID_ARGUMENT - if the request is malformed - FAILED_PRECONDITION - if the
   * requested state transition is illegal (e.g try to upload a duplicate xml
   * file), if the updated step is too large (more than 10Mib) - NOT_FOUND - if
   * the containing Execution does not exist (steps.patch)
   *
   * @param string $projectId A Project id.
   *
   * Required.
   * @param string $historyId A History id.
   *
   * Required.
   * @param string $executionId A Execution id.
   *
   * Required.
   * @param string $stepId A Step id.
   *
   * Required.
   * @param Google_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A unique request ID for server to detect
   * duplicated requests. For example, a UUID.
   *
   * Optional, but strongly recommended.
   * @return Google_Service_Step
   */
  public function patch($projectId, $historyId, $executionId, $stepId, Google_Service_Toolresults_Step $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Toolresults_Step");
  }
  /**
   * Publish xml files to an existing Step.
   *
   * May return any of the following canonical error codes:
   *
   * - PERMISSION_DENIED - if the user is not authorized to write project -
   * INVALID_ARGUMENT - if the request is malformed - FAILED_PRECONDITION - if the
   * requested state transition is illegal, e.g try to upload a duplicate xml file
   * or a file too large. - NOT_FOUND - if the containing Execution does not exist
   * (steps.publishXunitXmlFiles)
   *
   * @param string $projectId A Project id.
   *
   * Required.
   * @param string $historyId A History id.
   *
   * Required.
   * @param string $executionId A Execution id.
   *
   * Required.
   * @param string $stepId A Step id. Note: This step must include a
   * TestExecutionStep.
   *
   * Required.
   * @param Google_PublishXunitXmlFilesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Step
   */
  public function publishXunitXmlFiles($projectId, $historyId, $executionId, $stepId, Google_Service_Toolresults_PublishXunitXmlFilesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('publishXunitXmlFiles', array($params), "Google_Service_Toolresults_Step");
  }
}
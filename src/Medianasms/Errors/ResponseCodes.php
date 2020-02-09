<?php

namespace Medianasms\Errors;


abstract class ResponseCodes
{
    /**
     * Error when executing repository query
     * @var string
     */
    const ErrCredential = '10001';

    /**
     * Message body is empty 
     * @var string
     */
    const ErrMessageBodyIsEmpty = "10002";


    /**
     * User is limited
     * @var string
     */
    const ErrUserLimited = "10003";

    /**
     * Line not assigned to you
     * @var string
     */
    const ErrLineNotAssignedToYou = "10004";


    /**
     * recipients is empty
     * @var string
     */
    const ErrRecipientsEmpty = "10005";

    /**
     * Credit not enough
     * @var string
     */
    const ErrCreditNotEnough = "10006";

    /**
     * Line not profit for bulk send
     * @var string
     */
    const ErrLineNotProfitForBulkSend = "10007";

    /**
     * Line deactivated temporally
     * @var string
     */
    const ErrLineDeactiveTemp = "10008";

    /**
     * Maximum recipients number exceeded
     * @var string
     */
    const ErrMaximumRecipientExceeded = "10009";

    /**
     * Operator is offline
     * @var string
     */
    const ErrOperatorOffline = "10010";

    /**
     * Pricing not defined for user
     * @var string
     */
    const ErrNoPricing = "10011";

    /**
     * Ticket is invalid
     * @var string
     */
    const ErrTicketIsInvalid = "10012";

    /**
     * Access denied
     * @var string
     */
    const ErrAccessDenied = "10013";

    /**
     * Pattern is invalid
     * @var string
     */
    const ErrPatternIsInvalid = "10014";

    /**
     * Pattern parameters is invalid
     * @var string
     */
    const ErrPatternParamettersInvalid = "10015";

    /**
     * Pattern is inactive
     * @var string
     */
    const ErrPatternIsInactive = "10016";

    /**
     * Pattern recipient invalid
     * @var string
     */
    const ErrPatternRecipientInvalid = "10017";

    /**
     * Unauthorized send with pattern
     * @var string
     */
    const ErrPatternUnAuthorizedSend = "10018";

    /**
     * Send time is 8-23
     * @var string
     */
    const ErrItsTimeToSleep = "10019";

    /**
     * Credit card not provided
     * @var string
     */
    const ErrCreditCardNotProvided = "10020";

    /**
     * One/all of users documents not approved
     * @var string
     */
    const ErrDocumentsNotApproved = "10021";

    /**
     * Internal error
     * @var string
     */
    const ErrInternal = "10022";

    /**
     * Internal error
     * @var string
     */
    const ErrEntityNotFound = "10023";

    /**
     * Internal error
     * @var string
     */
    const ErrForbidden = "10024";

    /**
     * Inputs have some problems
     * @var string
     */
    const ErrUnprocessableEntity = "422";

    /**
     * Unauthorized
     * @var string
     */
    const ErrUnauthorized = "1401";

    /**
     * Api key is not valid
     * @var string
     */
    const ErrKeyNotValid = "1402";

    /**
     * Api key revoked
     * @var string
     */
    const ErrKeyRevoked = "1403";
}

# MGR Redactor

## Description

If a user is logged out, this removes the content from a post that's surrounded by `[redact]` and replaces it with an ellipsis.

## Example

The phrase:

	Hello [redact]World!  What a great[/redact] day!

to someone logged out, would only appear as

	Hello &hellip; day!

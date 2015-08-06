<?hh // strict
/**
 * Copyright (c) 2015-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

class StrBuffer {

  private string $str = '';
  private bool $detached = false;

  public function append(mixed $value): void {
    $this->str .= (string) $value;
  }

  public function detach(): string {
    invariant(!$this->detached, 'The buffer has been already detached');
    $this->detached = true;
    return $this->str;
  }
}
